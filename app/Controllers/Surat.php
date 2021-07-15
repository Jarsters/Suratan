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
				'posisi' => sizeof($suratModel->findAll()) + 1
			];
			return view('surat/ajukan', $data);
		}
		return redirect()->to(base_url('/login'));
	}

	public function simpan_surat()
	{
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
		return $this->lihat($surat['no_disposisi']);
	}

	public function lihat($no_disposisi)
	{
		$suratModel = new SuratModel();
		$surat = $suratModel->where(['no_disposisi' => $no_disposisi])->first();
		// date_default_timezone_set('Asia/Jakarta');
		// $data = [
		// 	'id' => 15,
		// 	'no_disposisi' => 2, 
		// 	'no_surat' => null,
		// 	'perihal' => '98/mnsa/10921/31', 
		// 	'asal_surat' => 'SMAN 99', 
		// 	'surat_dibuat' => '2021-09-10', 
		// 	'keterangan' => 'Dibuat untuk memberi prestasi ke Resa Fajar Sukma',
		// 	'kepada' => 'Tata Usaha', 
		// 	'tanggal_surat' => date('d-m-Y H:i:s'), 
		// 	'status' => 0, 
		// 	'tahun' => date('Y')
		// ];
		// $suratModel = new SuratModel();
		// $suratModel->save($data);
		// d($suratModel->findAll());
		// echo(date_default_timezone_get());
		// echo('<br>');
		// echo(date('d-m-Y H:i:s')."<br>");
		// echo(date('d-m-Y', strtotime($data['surat_dibuat'])));
		$data = [
			'title' => 'Konfirmasi Surat',
			'surat' => $surat
		];
		// echo("<br><br><br><br><br><br>");
		// $model = 1;
		// $no_surat = ($model) ? 1 : 0;
		// $tahun = ($no_surat) ? 0 : 1;
		// echo("
		// 	No_surat: $no_surat,
		// 	Tahun   : $tahun
		// ");
		return view('surat/konfirmasi', $data);
	}

	public function update_manual()
	{
		date_default_timezone_set('Asia/Jakarta');
		$suratModel = new SuratModel();
		$surat = $suratModel->where(['id' => 15])->first();
		// $data_tambahan = [
		// 	'keterangan' => 'Surat sudah di Kasudin',
		// 	'kepada' => "Tata Usaha",
		// 	'tanggal_surat' => date('d-m-Y H:i:s')
		// ];
		// $data = [
		// 	'id' => $surat['id'],
		// 	'no_disposisi' => $surat['no_disposisi'], 
		// 	'no_surat' => null,
		// 	'perihal' => $surat['perihal'], 
		// 	'asal_surat' => $surat['asal_surat'], 
		// 	'surat_dibuat' => $surat['surat_dibuat'], 
		// 	'keterangan' => $surat['keterangan'].",".$data_tambahan['keterangan'],
		// 	'kepada' => $surat['kepada'].",".$data_tambahan['kepada'], 
		// 	'tanggal_surat' => $surat['tanggal_surat'].",".$data_tambahan['tanggal_surat'], 
		// 	'status' => ($data_tambahan['kepada'] == 'selesai') ? 1 : $surat['status'], 
		// 	'tahun' => $surat['tahun']
		// ];
		// $suratModel->save($data);
		// d($suratModel->findAll());
		// echo(gettype(strval($surat['keterangan'])));
		// d($surat);
		// echo(sizeof(explode(',', $surat['keterangan'])));
		// echo(explode(',', $surat['keterangan'])[0]);
		echo(date('d-m-Y', strtotime("2021-02-13")));
	}
}