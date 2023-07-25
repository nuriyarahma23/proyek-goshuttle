<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KotaModel;
use App\Models\KursipenumpangModel;
use App\Models\ReservasiModel;
use Config\Database;

class KursipenumpangController extends BaseController
{

    public function getDatabyId($id)
    {
        $db      = Database::connect();
        $query = "SELECT * FROM kursi_penumpang JOIN reservasi ON kursi_penumpang.id_reservasi = reservasi.id_reservasi WHERE kursi_penumpang.id_kursi = $id";

        $kursiPenumpang =  $db->query($query)->getResultArray();

        return json_encode($kursiPenumpang[0]);
    }

    public function rescheduleReservasi($id)
    {

        $kotaModel = new KotaModel();
        $kotaData = $kotaModel->findAll();
        $kota = [];
        // dd($kotaData);
        $grup_kota0 = [];
        foreach ($kotaData as $kd) {

            $kota[$kd['grup_kota']][] = $kd;
            $grup_kota0[] = $kd['grup_kota'];
        }

        $grup_kota = array_unique($grup_kota0);


        // $reservasiModel =new ReservasiModel();
        // $reservasiModel->where('')

        return view('reservation/reschedulereservation', ['kota' => $kota, 'grup_kota' => $grup_kota, 'id_kursi' => $id]);
    }

    public function kursiTersedia($id)
    {

        $asal = $this->request->getPost('asal');
        $tujuan = $this->request->getPost('tujuan');
        $tanggal_keberangkatan = $this->request->getPost('tanggal_keberangkatan');
        $id_kursi = $this->request->getPost('id_kursi');
        $reservasiModel = new ReservasiModel();

        if (!empty($asal)) {
            $kotaModelasal = new KotaModel();
            $kotaasal = $kotaModelasal->find($asal);

            $reservasiModel->where('asal_kota', $kotaasal['kode_kota']);
        }
        if (!empty($tujuan)) {
            $kotaModeltujuan = new KotaModel();
            $kotatujuan = $kotaModeltujuan->find($tujuan);

            $reservasiModel->where('tujuan_kota', $kotatujuan['kode_kota']);
        }
        if (!empty($tanggal_keberangkatan)) {
            $reservasiModel->where('tanggal_reservasi', $tanggal_keberangkatan);
        }


        // Melakukan pencarian data berdasarkan kondisi WHERE
        $reservasiData = $reservasiModel->findAll();
        $reservasiData2 = [];


        $kursiModel = new KursipenumpangModel();
        foreach ($reservasiData as $datare) {


            $kursiTersedia = $kursiModel->where('id_reservasi', $datare['id_reservasi'])->where('nomor_telepon', '')->get()
                ->getResultArray();

            $datare['kursitersedia'] = $kursiTersedia;
            $reservasiData2[] = $datare;
        }

        // print_r($reservasiData);

        // return json_encode($reservasiData2);



        // Mengambil tampilan HTML dari view
        $html = view('reservation/cekjadwalreschedule', ['reservasi' => $reservasiData2]);


        // Mengembalikan respons berupa HTML
        return $html;
    }
    public function simpanrescheduleReservasi()
    {

        $jadwal = $this->request->getPost('jadwal');
        $id_kursi_sebelumnya = $this->request->getPost('id_kursi_sebelumnya');
        $kursiModel = new KursipenumpangModel();
        $kursisebelumnya = $kursiModel->where('id_kursi', $id_kursi_sebelumnya)->get()->getRowArray();


        // ganti nilai sebelumnya ke baru
        $kursiModel->where('id_kursi', $id_kursi_sebelumnya)
            ->set(['nomor_telepon' => '', 'nama' => ''])
            ->update();

        $jadwal = $kursiModel->where('id_kursi', $jadwal)->set(['nomor_telepon' => $kursisebelumnya['nomor_telepon'], 'nama' => $kursisebelumnya['nama']])
            ->update();


        return redirect()->back()->with('success', 'Reschedule berhasil dilakukan');
    }
}
