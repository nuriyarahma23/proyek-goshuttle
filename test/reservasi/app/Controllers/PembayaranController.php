<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;
use App\Models\KursipenumpangModel;
use App\Models\PembayaranModel;
use App\Models\ReservasiModel;

class PembayaranController extends BaseController
{
    public function batalkanPembayaran()
    {


        $id = $this->request->getVar('id');
        $pembayaranModel = new PembayaranModel();
        $pembayaranData = $pembayaranModel->where('id_kursi', $id)->first(); // Menggunakan first() untuk mendapatkan satu baris data sebagai objek

        if ($pembayaranData) {
            $data = [
                'id_kursi' => $id,
                'status_pembayaran' => 'Konfirmasi pembayaran',
              
            ];
            // return $this->response->setJSON(json_encode($data));
            $pembayaranModel->update($pembayaranData['id_pembayaran'], $data);
            return $this->response->setJson(json_encode([
                'success' => 'Berhasil mengupdate pembayaran ke konfirmasi'
            ]));
        } else {
            return $this->response->setJson(json_encode([
                'error' => 'Data pembayaran tidak ditemukan'
            ]));
        }
    }

    public function konfirmasiPembayaran($id)
    {

        $pembayaranModel = new PembayaranModel();
        $pembayaranData = $pembayaranModel->where('id_kursi', $id)->get()->getResultArray();


        $pembayaranModel1 = new PembayaranModel();
        $pembayaranData1 = $pembayaranModel1->find($pembayaranData[0]['id_pembayaran']); // Mengambil data dengan ID 1
        if ($pembayaranData1) {
            $pembayaranData1['status_pembayaran'] = 'Sudah membayar'; // Mengubah status pembayaran
            $pembayaranModel1->update($pembayaranData[0]['id_pembayaran'], $pembayaranData1); // Menyimpan perubahan ke database
        }


        // // Mengirimkan pesan konfirmasi ke view atau melakukan redirect
        return redirect()->back()->with('pesan', "test");
    }
    public function melakukanpembayaran($id)
    {

        $kursipenumpangModel = new KursipenumpangModel();
        $kursipenumpangData = $kursipenumpangModel->find($id);


        $pembayaranModel = new PembayaranModel();

        $reservasiModel = new ReservasiModel();
        $reservasiData = $reservasiModel->find($kursipenumpangData['id_reservasi']);

        $hargareservasi = $reservasiData['harga_tiket'];

        $diskonModel = new DiskonModel();

        if ($kursipenumpangData['id_diskon']) {
            $diskonData = $diskonModel->find($kursipenumpangData['id_diskon']);
            if ($diskonData['type'] == 'percentage') {
                $hargadiskon = $hargareservasi * ($diskonData['besaran'] / 100);
                $hargasetelahdiskon = $hargareservasi - $hargadiskon;
                $hargareservasi = $hargasetelahdiskon;
            }
            if ($diskonData['type'] == 'amount') {
                $hargasetelahdiskon = $hargareservasi - $diskonData['besaran'];
                $hargareservasi = $hargasetelahdiskon;
            }
        }

        $pembayaranData = $pembayaranModel->where('id_kursi', $id)->get()->getResultArray();
        // Mendapatkan nilai metode pembayaran dari form
        $metodePembayaran = $this->request->getVar('metodePembayaran');
        if (empty($pembayaranData)) {
            // Membuat data baru

            $data = [
                'id_kursi' => $kursipenumpangData['id_kursi'],
                'harga' => $hargareservasi, // Ganti dengan harga yang diinginkan
                'metode_pembayaran' => $metodePembayaran,
                'status_pembayaran' => 'Konfirmasi pembayaran',

            ];

            // Menyimpan data baru ke dalam tabel pembayaran
            $pembayaranModel->insert($data);

            // Mengambil data baru setelah disimpan
            $pembayaranData = $pembayaranModel->where('id_kursi', $kursipenumpangData['id_kursi'])->get()->getRowArray();
        } else {

            $pembayaranModel1 = new PembayaranModel();
            $pembayaranData1 = $pembayaranModel1->find($pembayaranData[0]['id_pembayaran']); // Mengambil data dengan ID 1

            $pembayaranData1['harga'] = $hargareservasi;
            $pembayaranData1['metode_pembayaran'] =  $metodePembayaran;
            $pembayaranData1['status_pembayaran'] = 'Konfirmasi pembayaran'; // Mengubah status pembayaran
            $pembayaranModel1->update($pembayaranData[0]['id_pembayaran'], $pembayaranData1); // Menyimpan perubahan ke database
        }





        // // Mengirimkan pesan konfirmasi ke view atau melakukan redirect
        return redirect()->back()->with('pesan', "test");
    }
}
