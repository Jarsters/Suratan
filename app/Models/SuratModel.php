<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table      = 'surat';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_disposisi', 'no_surat', 'perihal', 'asal_surat', 'keterangan',
        'kepada', 'tanggal_surat', 'status', 'tahun'
    ];

    public function getSurat($no_disposisi = false, $no_surat = false, $year = false)
    {
        if(!$year){ $year = date("Y"); }
        if(!$no_disposisi && !$no_surat){
            return $this->findAll();
        }
        if($no_disposisi){
            return $this->where(['no_disposisi' => $no_disposisi, 'tahun' => $year])->first();
        }
        if($no_surat){
            return $this->where(['no_surat' => $no_surat, 'tahun' => $year])->first();
        }
    }
}