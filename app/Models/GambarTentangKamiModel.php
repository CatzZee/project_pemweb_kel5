<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarTentangKamiModel extends Model
{
    protected $table = 'gambar_tentang_kami';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file', 'path', 'created_at', 'update_at'];
    protected $useTimestamps = true;
}
