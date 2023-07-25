<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogReservasi;
use App\Models\MobilModel;
use App\Models\ReservasiModel;
use App\Models\SopirModel;

class ReservationSopirdanMobilController extends BaseController
{
    protected $reservationModel;
    protected $sopirModel;
    protected $mobilModel;

    public function __construct()
    {
        $this->reservationModel = new ReservasiModel();
    }

    public function update($id)
    {
        // Ambil data dari form
        $data = [
            'id_sopir' => $this->request->getPost('id_sopir'),
            'id_mobil' => $this->request->getPost('id_mobil'),
        ];

        // Update data di database
        $this->reservationModel->update($id, $data);


        $logReservasiModel = new LogReservasi();
        $mobilModel = new MobilModel();
        $mobilData = $mobilModel->find($this->request->getPost('id_mobil'));
        $sopirModel = new SopirModel();
        $sopirData = $sopirModel->find($this->request->getPost('id_sopir'));

        $keterangankativitas = "set unit: " . $mobilData['nopol'] .  ", driver: " . $sopirData['nama_sopir'] . " BOP: 99999999999999--";
        $datalog = [
            'id_reservasi' => $id,
            'tipe_aktivitas' => "UPDATE",
            'keterangan_aktivitas' => $keterangankativitas,
            'nama_terlibat' => session('nama'),
            'id_user' => session('id'),
            'created_at' => date('Y-m-d H:i:s'),

        ];
        $logReservasiModel->insert($datalog);
        return redirect()->to('/reservation')->with('success', 'Reservation updated successfully');
    }
}
