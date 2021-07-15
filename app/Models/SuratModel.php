<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table      = 'surat';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_disposisi', 'no_surat', 'perihal', 'asal_surat', 'surat_dibuat', 'keterangan',
        'kepada', 'tanggal_surat', 'status', 'tahun'
    ];

    public function simpan($datas)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id' => isset($datas['id']) ? $datas['id'] : null,
            'no_disposisi' => $datas['no_disposisi'],
            'no_surat' => isset($datas['no_surat']) ? $datas['no_surat'] : null,
            'perihal' => $datas['perihal'],
            'asal_surat' => $datas['asal_surat'],
            'surat_dibuat' => date('Y-m-d', strtotime($datas['surat_dibuat'])),
            'keterangan' => 'Diinput ke database',
            'kepada' => 'Tata Usaha',
            'tanggal_surat' => date('d-m-Y H:i:s'),
            'status' => 0,
            'tahun' => date('Y')
        ];
        $this->save($data);
    }

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