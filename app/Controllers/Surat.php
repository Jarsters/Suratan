<?php

namespace App\Controllers;

use \App\Models\UserModel;
use \App\Models\DisposisiModel;
use \App\Models\SuratModel;

class Surat extends BaseController
{
	public function index()
	{
		if($this->session->has('username')){
			$suratModel = new SuratModel();
			$data = [
				'title' => 'Kumpulan Surat',
				'surat' => $suratModel->findAll()
			];
			return view('surat/index', $data);
		}
		return redirect()->to(base_url('/login'));
	}

    public function ajukan()
	{
		if($this->session->has('username')){
			$suratModel = new SuratModel();
			$data = [
				'title' => 'Ajukan Surat',
			];

			// Akan mereset menjadi 1 jika tahun baru
			$disposisiModel = new DisposisiModel();
			$dataDisposisi = $disposisiModel->where("id", "1")->first();
			$surat = $suratModel->where(['tahun'=>date("Y")])->first();
			if(!$surat){
				$disposisiModel->save([
					'id' => 1,
					'nomor' => 1
				]);
			}
			$data['posisi'] = $dataDisposisi['nomor'];
			return view('surat/ajukan', $data);
		}
		return redirect()->to(base_url('/login'));
	}

	public function simpan_surat()
	{
		$disposisiModel = new DisposisiModel();
		$dataDisposisi = $disposisiModel->where("id", "1")->first();
		$disposisiModel->save([
			'id' => 1,
			'nomor' => $dataDisposisi['nomor'] + 1
		]);
		$suratModel = new SuratModel();
		$suratModel->simpan($this->request->getVar());
		return redirect()->to(base_url(''));
	}

	public function search()
	{
		$suratModel = new SuratModel();
		$data = $this->request->getVar('keyword');
		$surat = $suratModel->getSurat($no_disposisi = $data);
		$surat = ($surat) ? $surat : $suratModel->getSurat(false, $data, false);
		$surat = ($surat) ? $surat : $suratModel->getSurat(false, false, $data);
		$data = [
			'title' => 'Konfirmasi Surat',
			'surat' => $surat
		];
		if(isset($surat['no_disposisi'])) { return $this->lihat($surat['no_disposisi']); }

		$this->session->setFlashData('pesan_no_disposisi', 'Nomor disposisi tidak ditemukan!');
		
		return redirect()->to(base_url(''));
	}

	public function lihat($no_disposisi)
	{
		$suratModel = new SuratModel();
		$surat = $suratModel->where(['no_disposisi' => $no_disposisi])->first();
		$data = [
			'title' => 'Konfirmasi Surat',
			'surat' => $surat
		];
		return view('surat/konfirmasi', $data);
	}

	public function update()
	{
		date_default_timezone_set('Asia/Jakarta');
		$suratModel = new SuratModel();
		$data = $this->request->getVar();
		$surat = $suratModel->where(['id' => $data['id']])->first();
		$update = [
			'id' => $data['id'],
			'no_disposisi' => $surat['no_disposisi'],
            'no_surat' => isset($data['no_surat']) ? $data['no_surat'] : null,
            'perihal' => $surat['perihal'],
            'asal_surat' => $surat['asal_surat'],
            'surat_dibuat' => $surat['surat_dibuat'],
            'keterangan' => $surat['keterangan'].','.$data['keterangan'],
            'kepada' => $surat['kepada'].','.$data['keterangan'],
            'tanggal_surat' => $surat['tanggal_surat'].','.$data['tanggal_surat'],
            'status' => ($data['keterangan'] == 'selesai') ? '1' : '0',
            'tahun' => $surat['tahun']
		];
		$suratModel->save($update);
		return redirect()->to(base_url('/surat'));
	}
}