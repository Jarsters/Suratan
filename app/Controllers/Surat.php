<?php

namespace App\Controllers;

use \App\Models\UserModel;
use \App\Models\DisposisiModel;
use \App\Models\SuratModel;

class Surat extends BaseController
{
	public function index()
	{
        return view('surat/index');
	}

    public function ajukan()
	{
		return view('surat/ajukan');
	}
}