<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarLogoModel extends Model
{
    protected $table = 'gambar_logo';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file', 'path', 'created_at', 'update_at'];
    protected $useTimestamps = true;
}
