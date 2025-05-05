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

echo "# project_pemweb_kel5" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/CatzZee/project_pemweb_kel5.git
git push -u origin main