<?php

namespace App\Models;

use CodeIgniter\Model;

class SopirModel extends Model
{
    protected $table = 'sopir';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_sopir'];
}
