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

	public function update_manual()
	{
		date_default_timezone_set('Asia/Jakarta');
		$suratModel = new SuratModel();
		$surat = $suratModel->where(['id' => 15])->first();
		echo(date('d-m-Y', strtotime("2021-02-13")));
	}
}