<?php

namespace App\Controllers;

use \App\Models\RoleModel;

class Home extends BaseController
{

	public function index()
	{
		// return view('welcome_message');
		// echo ("Hello world!");
		$roleModel = new RoleModel();
		$role = $roleModel->findAll();
		dd($role);
	}
}
