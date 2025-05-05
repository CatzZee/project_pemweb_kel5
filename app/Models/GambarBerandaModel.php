<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarBerandaModel extends Model
{
    protected $table = 'gambar_beranda';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file', 'path', 'created_at', 'update_at'];
    protected $useTimestamps = true;
}
