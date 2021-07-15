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
        // auth/login disetting dari router
        return redirect()->to('auth/login');
    }

    public function index()
    {
        // $userModel = new userModel();
        // d($userModel->findAll());
        // $user = $userModel->where(['id_karyawan'=>'3123123141569'])->first();
        // echo($userModel->dekrip($user['password']));
        // d($this->session->get());
        return view('login/login');
    }
}