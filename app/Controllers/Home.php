<?php

namespace App\Controllers;

use \App\Models\UserModel;
use \App\Models\DisposisiModel;
use \App\Models\SuratModel;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		return view('home/index', $data);
	}

	public function catatan()
	{
	// ############################################################################################################

		// Tentang USER MODEL ####################################################

		// User model meng-enkrip password dan dekrip
		// $userModel = new UserModel();
		// $dataUser = [
		// 	'id' => 11,
		// 	'jabatan' => "Pemilik Perusahaan",
		// 	'password' => $userModel->enkrip('akucintadia'),
		// 	"id_karyawan" => "1313618290"
		// ];
		// $userModel->save($dataUser);
		// $user = $userModel->where(["id_karyawan" => "3123123141569"])->first();
		// $dataUser = [
		// 	'id' => $user['id'],
		// 	'jabatan' => "direktur utama",
		// 	'password' => $user['password'],
		// 	"id_karyawan" => $user['id_karyawan']
		// ];
		// echo($userModel->dekrip($user['password']));
		// d($userModel->findAll());
		// $userModel->save($dataUser);
		// $user = $userModel->find();
		// echo($user[0]["password"]."<br>");
		// echo($userModel->dekrip($user[0]["password"])."<br>");
	}

}
