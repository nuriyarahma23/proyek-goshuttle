<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KursipenumpangModel;
use Config\Database;

class KursipenumpangController extends BaseController
{
    public function index()
    {
    }
    public function getDatabyId($id)
    {
        $db      = Database::connect();
        // $builder = $db->table('kursi_penumpang');
        // $builder->select('*');
        // $builder->join('reservasi', 'reservasi.id_reservasi = kursi_penumpang.id_reservasi');
        // $query = $builder->get();

        $kursiPenumpangModel = new KursiPenumpangModel();

        $kursiPenumpang =   DB::select('SELECT * FROM kursi_penumpang
        JOIN reservasi ON kursi_penumpang.id_reservasi = reservasi.id');
        return json_encode($kursiPenumpang);
    }
}
