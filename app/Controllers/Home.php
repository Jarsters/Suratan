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
		// return view('welcome_message');
		// echo ("Hello world!");

		// Explode/split string dengan separatornya apa ####################################################
		$string = "nama,saya,siapa";
		// dd(explode(",", $string));

		// For loop explode ####################################################
		// $exploded = explode(",", $string);
		// for ($i = 0; $i < sizeof($exploded); $i++){
		// 	echo($exploded[$i]."<br>");
		// }
		
		// Ambil year aja ####################################################
		// echo(date("Y"));

	// ############################################################################################################

		// Tentang USER MODEL ####################################################

		// Enkripsi Dipake di model untuk save user ####################################################
		// $encrypter = \Config\Services::encrypter();
		// $cipher= $encrypter->encrypt($string);
		// echo("Cipher Teks: ".$cipher."<br><br>");
		// echo("Plain Teks: ".$encrypter->decrypt($cipher));

		// User model meng-enkrip password dan dekrip
		$userModel = new UserModel();
		$dataUser = [
			'id' => 11,
			'jabatan' => "Pemilik Perusahaan",
			'password' => $userModel->enkrip('akucintadia'),
			"id_karyawan" => "1313618290"
		];
		$userModel->save($dataUser);
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
		
	// ############################################################################################################
		
		// Tentang Disposisi ####################################################
		$disposisiModel = new DisposisiModel();
		$dataDisposisi = $disposisiModel->where("id", "1")->first();
		// echo($dataDisposisi['nomor']);
		// $disposisiModel->save([
		// 	'id' => $dataDisposisi['id'],
		// 	'nomor' => 1
		// ]);
		// if("2022"){
		// 	$disposisiModel->save([
		// 		'id' => $data['id'],
		// 		'nomor' => 1
		// 	]);
		// }

// ############################################################################################################

		// Tentang Surat  ####################################################
		$suratModel = new SuratModel();
		// echo("<br>".date("Y-m-d H:i:s"));
		// echo("<br>".$myTime);
		// $dataSurat = [
		// 	"no_disposisi" => 13136180291,
		// 	"no_surat" => null,
		// 	"perihal" => "am/coma12/12415/10-124",
		// 	"asal_surat" => "rumah pacar",
		// 	"keterangan" => "surat cinta ke sepuluh!",
		// 	"kepada" => "kekasihku",
		// 	"tanggal_surat" => date("Y-m-d"),
		// 	"status" => "diterima dengan senang hati",
		// 	"tahun" => date("Y")
		// ];

			// ################### UNTUK RESTART DISPOSISI JIKA SUDAH GANTI TAHUN #####################
				// $tahun = date("Y");
				// $lanjut_disposisi = $suratModel->where(['tahun' => $tahun])->first();
				// if(!$lanjut_disposisi){
				// 	// $disposisiModel->save([
				// 	// 	'id' => $data['id'],
				// 	// 	'nomor' => 1
				// 	// ]);
				// }

		// $suratModel->save($dataSurat);
		// d($suratModel->findAll());
		$surat = $suratModel->where(['tahun' => '2021'])->first();
		// $dataSurat = [
		// 		'id' => $surat['id'],
		// 		"no_disposisi" => $surat['no_disposisi'],
		// 		"no_surat" => $surat['no_surat'],
		// 		"perihal" => $surat['perihal'],
		// 		"asal_surat" => $surat['asal_surat'],
		// 		"keterangan" => $surat['keterangan'].',sudah diterima oleh kekasihmu',
		// 		"kepada" => $surat['kepada'].',kekasihku yang baik hati',
		// 		"tanggal_surat" => $surat['tanggal_surat'].','.date("Y-m-d"),
		// 		"status" => $surat['status'].',aku mau jalan sama kamu',
		// 		"tahun" => $surat['tahun']
		// 	];
		// $suratModel->save($dataSurat);
		d($surat);
		// $disposisiModel->save(["id" => "1", "nomor" => $dataDisposisi["nomor"] + 1]);
	}

}
