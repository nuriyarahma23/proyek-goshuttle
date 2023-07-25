<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaketModel;

class PaketController extends BaseController
{
    protected $paket;
    public function __construct()
    {
        $this->paket = new PaketModel();
    }
    public function index($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT paket.*, reservasi.point_keberangkatan from paket JOIN reservasi ON reservasi.id_reservasi = paket.id_reservasi WHERE reservasi.id_reservasi = ' . $id . ';');
        // $paketModel = $this->paket->where('id_reservasi', $id)->get();
        $paket = $query->getResult();


        return view('reservation/menu/paket', ['paket' => $paket, 'id' => $id]);
    }

    public function create()
    {
        return view('paket/create');
    }

    public function store()
    {
        $model = new PaketModel();


        $data = [
            'pengirim' => $this->request->getPost('sender_name'),
            'nomor_pengirim' => $this->request->getPost('sender_phone'),
            'penerima' => $this->request->getPost('receiver_name'),
            'nomor_penerima' => $this->request->getPost('receiver_phone'),
            'berat' => $this->request->getPost('weight'),
            'jumlah_koli' => $this->request->getPost('piece'),
            'jenis' => $this->request->getPost('type'),
            'isi' => $this->request->getPost('content'),
            'id_reservasi' => $this->request->getPost('id_reservasi'),
            'harga' => $this->request->getPost('harga'),
            'id_user' => session('id'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $model->insert($data);
        echo "Berhasil";

        return redirect()->back();
    }



    public function edit($id)
    {
        $model = new PaketModel();
        $data['paket'] = $model->find($id);

        return view('paket/edit', $data);
    }

    public function update($id)
    {
        $model = new PaketModel();

        $data = [
            'pengirim' => $this->request->getPost('sender_name'),
            'nomor_pengirim' => $this->request->getPost('sender_phone'),
            'penerima' => $this->request->getPost('receiver_name'),
            'nomor_penerima' => $this->request->getPost('receiver_phone'),
            'berat' => $this->request->getPost('weight'),
            'jumlah_koli' => $this->request->getPost('piece'),
            'jenis' => $this->request->getPost('type'),
            'isi' => $this->request->getPost('content'),
            'id_reservasi' => $this->request->getPost('id_reservasi'),
            'harga' => $this->request->getPost('harga'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $model->update($id, $data);

        return redirect()->back();
    }

    public function delete($id)
    {
        $model = new PaketModel();
        $model->delete($id);

        return redirect()->back();
    }
}
