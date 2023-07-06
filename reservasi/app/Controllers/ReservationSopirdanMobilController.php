<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservasiModel;

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

        return redirect()->to('/reservation')->with('success', 'Reservation updated successfully');
    }

   
}
