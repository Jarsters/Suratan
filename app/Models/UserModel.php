<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'jabatan', 'password', 'id_karyawan'];

    public function getUser($id = false){
        if(!$id){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function enkrip($password_plain){
        $encryptor = \Config\Services::encrypter();
        return bin2hex($encryptor->encrypt($password_plain));
    }

    public function dekrip($password_cipher){
        $encryptor = \Config\Services::encrypter();
        return $encryptor->decrypt(hex2bin($password_cipher));
    }
}