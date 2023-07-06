<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'reservasi';

    protected $primaryKey = 'id_reservasi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = [
        'asal_kota',
        'tujuan_kota',
        'waktu',
        'harga',
        'tanggal_reservasi',
        'id_sopir',
        'id_mobil'
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
    protected $afterInsert    = ['createKursiPenumpang'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected function createKursiPenumpang(array $data)
    {

        // Dapatkan ID reservasi yang baru dibuat
        $reservasiId = $this->getInsertID();
        $kursiData = [];
        // Buat 8 data KursipenumpangModel terkait dengan ID reservasi
        for ($i = 0; $i < 8; $i++) {
            $kursiData[] = [
                'id_reservasi' => $reservasiId,
                'nomor_kursi' => $i + 1,
                'nomor_telepon' => '',
                'nama' => '',
            ];
            // $this->kursipenumpangmodel->create($kursiData);
        }
        $this->db->table('kursi_penumpang')->insertBatch($kursiData);
    }
}
