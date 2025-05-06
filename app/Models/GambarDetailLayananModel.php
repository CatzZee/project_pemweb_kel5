<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarDetailLayananModel extends Model
{
    protected $table = 'gambar_detail_layanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file', 'path', 'created_at', 'update_at'];
    protected $useTimestamps = true;
}