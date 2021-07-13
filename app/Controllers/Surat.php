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
			$data = [
				'title' => 'Kumpulan Surat'
			];
			return view('surat/index', $data);
		}
		return redirect()->to(base_url('/login'));
	}

    public function ajukan()
	{
		if($this->session->has('username')){
			$data = [
				'title' => 'Ajukan Surat'
			];
			return view('surat/ajukan', $data);
		}
		return redirect()->to(base_url('/login'));
	}
}