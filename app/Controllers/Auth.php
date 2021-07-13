<?php

namespace App\Controllers;


class Auth extends BaseController
{
    public function index()
    {
        $array = [
            'nama' => 'nama',
            'email' => 'gudeong@gmail.com',
            'alamat' => 'jalan gue doang yang bisa lewat',
            'nomor' => "087656792811"
        ];

        $this->session->set($array);
        // $session->remove("alamat");
        echo "Hello world";
        d($this->session->get());
        echo($this->session->has('email'));
        return view('auth/contoh_login');
    }
}