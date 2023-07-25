<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class KursipenumpangModel extends Model
{
    protected $table = 'kursi_penumpang';
    protected $primaryKey = 'id_kursi';
    protected $allowedFields = [
        'id_reservasi',
        'tipe_reservasi',
        'id_pelanggan',
        'id_kursi_parent',
        'nomor_kursi',
        'nomor_telepon',
        'nama',
        'note',
        'kode',
        'id_diskon',
        'checkin'
    ];
    protected $useAutoIncrement = true;
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
