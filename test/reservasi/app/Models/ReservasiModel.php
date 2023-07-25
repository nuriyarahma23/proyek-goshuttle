<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table = 'reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $allowedFields = [
        'point_keberangkatan',
        'tujuan',
        'jam',
        'harga_tiket',
        'tanggal_reservasi',
        'jml_kursi',
        'jenis_reservasi',
        'id_reservasi_pasangan',
        'status',
        'id_sopir',
        'id_mobil'
    ];

    function getAll()
    {
        $builder = $this->db->table('reservasi');
        $item = $builder->orderBy('tanggal_reservasi', 'DESC');
        $query = $item->get();
        return $query->getResult();
    }

    public function cekJadwal($id = null)
    {
        $builder = $this->db->table('reservasi');
        $builder->where('id_reservasi', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

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
        // dd([
        //     'reservasiId' => $reservasiId,
        //     'data' => $data

        // ]);
        $kursiData = [];
        // Generate kode dengan format PSGyyMMddHHiiSS

        // Buat 8 data KursipenumpangModel terkait dengan ID reservasi
        for ($i = 0; $i < 8; $i++) {
            $kode = 'PSG' . Time::now()->format('ymdHis') . $reservasiId;
            $kursiData[] = [
                'id_reservasi' => $reservasiId,
                'nomor_kursi' => $i + 1,
    
                'kode' => $kode,
                'note' => 'Belum ada nota'
            ];
            // $this->kursipenumpangmodel->create($kursiData);
        }

        $model = new KursipenumpangModel();
        $model->insertBatch($kursiData);
        // return $data;
    }
}
