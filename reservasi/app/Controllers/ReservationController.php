<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Kota;
use App\Models\KotaModel;
use App\Models\KursipenumpangModel;
use App\Models\ReservasiModel;
use App\Models\UserModel;
use PhpParser\Node\Expr\Print_;

class ReservationController extends BaseController
{
    public function index()
    {
        $reservasiModel = new ReservasiModel();
        $reservasi = $reservasiModel->findAll();
        // dd($reservasi);
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



        $userModel = new UserModel();
        $user = $userModel->find(1);

        // print_r($user);
        $data['user'] = $user;

        return view('reservation/index', ['user' => $user, 'reservasi' => $reservasi, 'kota' => $kota, 'grup_kota' => $grup_kota]);
    }
    public function getListReservasi()
    {
        $asal = $this->request->getPost('asal');
        $tujuan = $this->request->getPost('tujuan');
        $tanggal_keberangkatan = $this->request->getPost('tanggal_keberangkatan');
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
        foreach ($reservasiData as $datare) {

            $model = new KursipenumpangModel();

            $hitungkursitersedia = $model->where('id_reservasi', $datare['id_reservasi'])->where('nomor_telepon', '')
                ->countAllResults();
            $datare['total_tersedia'] = $hitungkursitersedia;
            $reservasiData2[] = $datare;
        }
        // print_r($reservasiData);

        // return json_encode($reservasiData2);



        // Mengambil tampilan HTML dari view
        $html = view('reservation/listreservasiavailable', ['reservasi' => $reservasiData2]);

        // Mengembalikan respons berupa HTML
        return $html;
    }
    public function getReservasi($id)
    {
        $reservasiModel = new ReservasiModel();
        $kursiPenumpangModel = new KursipenumpangModel();

        // Mengambil data Reservasi dengan id_reservasi 1

        $reservasi = $reservasiModel->find($id);
        $db = \Config\Database::connect();
        $reservasi0 = $db->query("SELECT * FROM `reservasi` JOIN `sopir` ON sopir.id = reservasi.id_sopir JOIN `mobil` ON mobil.id = reservasi.id_mobil WHERE reservasi.id_reservasi = $id;")->getResultArray();
        $reservasi = $reservasi0[0];



        // Mengambil data KursiPenumpang yang terkait dengan Reservasi
        $kursiPenumpang = $kursiPenumpangModel->where('id_reservasi', $reservasi['id_reservasi'])->findAll();

        $nomorKursiPenumpang = [];
        $no = 1;
        foreach ($kursiPenumpang as $kursi) {
            $nomorKursiPenumpang[$kursi['nomor_kursi']] = $kursi;
            $no++;
        }
        $Nomorkursi = $nomorKursiPenumpang;

        // Menampilkan Mobil
        $db = db_connect();
        $builder = $db->table('mobil');
        $mobil = $builder->get()->getResult();
        // Menampilkan data Sopir
        $builder1 = $db->table('sopir');
        $sopir = $builder1->get()->getResult();

        // Konten HTML yang akan dimuat dari controller


        // Mengambil tampilan HTML dari view
        $html = view('reservation/reservation', ['Nomorkursi' => $Nomorkursi, 'idReservasi' => $id, 'reservasi' => $reservasi, 'mobil' => $mobil, 'sopir' => $sopir]);

        // Mengembalikan respons berupa HTML
        return $html;
    }
    public function kursiReservasi($id)
    {


        $kursiPenumpangModel = new KursipenumpangModel();

        // Mengambil data Reservasi dengan id_reservasi 1
        $db = \Config\Database::connect();
        $reservasi0 = $db->query("SELECT * FROM `reservasi` JOIN `sopir` ON sopir.id = reservasi.id_sopir JOIN `mobil` ON mobil.id = reservasi.id_mobil WHERE reservasi.id_reservasi = $id;")->getResultArray();
        $reservasi = $reservasi0[0];


        // Mengambil data KursiPenumpang yang terkait dengan Reservasi
        $kursiPenumpang = $kursiPenumpangModel->where('id_reservasi', $reservasi['id_reservasi'])->findAll();

        $nomorKursiPenumpang = [];
        $no = 1;
        foreach ($kursiPenumpang as $kursi) {
            $nomorKursiPenumpang[$kursi['nomor_kursi']] = $kursi;
            $no++;
        }
        $Nomorkursi = $nomorKursiPenumpang;

        // Menampilkan Mobil
        $db = db_connect();
        $builder = $db->table('mobil');
        $mobil = $builder->get()->getResult();
        // Menampilkan data Sopir
        $builder1 = $db->table('sopir');
        $sopir = $builder1->get()->getResult();

        // Konten HTML yang akan dimuat dari controller


        // Mengambil tampilan HTML dari view
        $html = view('reservation/menu/kursireservasi', ['Nomorkursi' => $nomorKursiPenumpang, 'idReservasi' => $id, 'reservasi' => $reservasi, 'mobil' => $mobil, 'sopir' => $sopir]);

        // Mengembalikan respons berupa HTML
        return $html;
    }

   

    public function simpan()
    {
        $kursiReservasi = $this->request->getPost('kursi_reservasi');
        $nomorTelepon = $this->request->getPost('nomor_telepon');
        $nama = $this->request->getPost('nama');

        $kursiPenumpangModel = new KursipenumpangModel();

        // Cari data berdasarkan $kursiReservasi
        $kursiPenumpang = $kursiPenumpangModel->where('id_kursi', $kursiReservasi)->first();

        if ($kursiPenumpang) {
            // Update data nomor telepon dan nama
            $kursiPenumpangModel->update($kursiPenumpang['id_kursi'], [
                'nomor_telepon' => $nomorTelepon,
                'nama' => $nama
            ]);

            // Mengembalikan respons atau melakukan redirect jika diperlukan
        } else {
            // Data tidak ditemukan, berikan respons atau pesan error
        }
    }
}
