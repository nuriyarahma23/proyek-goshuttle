<?php

namespace App\Models;

use CodeIgniter\Model;

class LogReservasi extends Model
{
    protected $table = 'logreservasi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
        'id_reservasi',
        'tipe_aktivitas',
        'keterangan_aktivitas',
        'nama_terlibat',
        'id_user',
        'created_at',
    ];
}
