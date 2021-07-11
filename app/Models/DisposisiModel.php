<?php

namespace App\Models;

use CodeIgniter\Model;

class DisposisiModel extends Model
{
    protected $table      = 'disposisi';
    protected $primaryKey = 'id';
    protected $allowedFields = ["nomor"];
}