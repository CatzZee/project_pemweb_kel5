<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarJasaLayananModel extends Model
{
    protected $table = 'gambar_jasa_layanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file', 'path', 'created_at', 'update_at'];
    protected $useTimestamps = true;
}

