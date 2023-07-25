<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';

    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields = [
        'id_kursi',
        'harga',
        'metode_pembayaran',
        'status_pembayaran',
        'tanggal_batas_pembayaran',
        'tanggal_pembayaran',
        'id_user',
        'tersettle'
    ];

    public function getPembayaranById($id)
    {
        return $this->find($id);
    }
}
