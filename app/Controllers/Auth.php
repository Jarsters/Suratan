<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Auth extends BaseController
{

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url("/login"));
    }

    public function auth()
    {
        $data = $this->request->getVar();
        $userModel = new userModel();
        $user = $userModel->where(['id_karyawan'=>$data['username']])->first();
        if($user){
            $pass = $userModel->dekrip($user['password']);
            if($pass == $data['password']){
                $array = [
                    'username' => $data['username'],
                ];
                $this->session->set($array);
                return redirect()->to(base_url("/home"));
            }
        }
        return redirect()->to('auth/login');
    }

    public function index()
    {
        return view('login/login');
    }
}