<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaketModel;

class PaketController extends BaseController
{
    public function index()
    {
        $model = new PaketModel();
        $data['paket'] = $model->findAll();

        return view('paket/index', $data);
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
