<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $DBGroup          = 'default';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $table = 'paket';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_reservasi',
        'pengirim',
        'nomor_pengirim',
        'penerima',
        'nomor_penerima',
        'berat',
        'jumlah_koli',
        'jenis',
        'isi',
        'harga',
        'id_user',
        'tersettle',
        'created_at',
        'updated_at',
    ];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
