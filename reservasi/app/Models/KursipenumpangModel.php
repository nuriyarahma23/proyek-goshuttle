<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class KursipenumpangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table = 'kursi_penumpang';
    protected $primaryKey = 'id_kursi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['nomor_kursi', 'nomor_telepon', 'nama', 'id_reservasi', 'note', 'kode'];
    
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
    protected $beforeInsert   = ['generateKode'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected function generateKode(array $data)
    {
        // Generate kode dengan format PSGyyMMddHHiiSS
        $kode = 'PSG' . Time::now()->format('ymdHis');

        // Set nilai kode dan masukkan ke dalam data yang akan disimpan
        $data['kode'] = $kode;

        return $data;
    }
    public function reservasi()
    {
        return $this->belongsTo('App\Models\ReservasiModel', 'id_reservasi');
    }
}
