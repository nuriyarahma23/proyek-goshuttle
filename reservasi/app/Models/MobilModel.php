<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table = 'mobil';
    protected $primaryKey = 'id';
    protected $allowedFields = ['identitas', 'nopol'];
}
