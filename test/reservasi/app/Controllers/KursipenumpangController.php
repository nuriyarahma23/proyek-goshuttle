<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Kota;
use App\Models\KotaModel;
use App\Models\KursipenumpangModel;
use App\Models\PelangganModel;
use App\Models\PembayaranModel;
use App\Models\ReservasiModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;

class KursipenumpangController extends BaseController
{
    public function getDatabyId($id)
    {


        // $db      = Database::connect();
        // $query = "SELECT * FROM kursi_penumpang JOIN reservasi ON kursi_penumpang.id_reservasi = reservasi.id_reservasi WHERE kursi_penumpang.id_kursi = $id";

        // $kursiPenumpang =  $db->query($query)->getResultArray();

        // return json_encode($kursiPenumpang[0]);

        $kursipenumpangModel = new KursipenumpangModel();
        $kursipenumpangData = $kursipenumpangModel->find($id);
        $pembayaranModel = new PembayaranModel();

        $reservasiModel = new ReservasiModel();
        $reservasiData = $reservasiModel->find($kursipenumpangData['id_reservasi']);
        $hargareservasi = $reservasiData['harga_tiket'];

        if ($kursipenumpangData) {
            $pembayaranData = $pembayaranModel->where('id_kursi', $kursipenumpangData['id_kursi'])->get()->getRowArray();


            if (empty($pembayaranData)) {
                // Membuat data baru
                $data = [
                    'id_kursi' => $kursipenumpangData['id_kursi'],
                    'harga' => $hargareservasi, // Ganti dengan harga yang diinginkan
                    'status_pembayaran' => 'Belum membayar',
                ];

                // Menyimpan data baru ke dalam tabel pembayaran
                $pembayaranModel->insert($data);

                // Mengambil data baru setelah disimpan
                $pembayaranData = $pembayaranModel->where('id_kursi', $kursipenumpangData['id_kursi'])->get()->getRowArray();
            }



            // Tampilkan view 

            $kotaModel = new KotaModel();

            $kotaasal = $kotaModel->where('kode_kota', $reservasiData['point_keberangkatan'])->get()->getResultArray();
            $kotatujuan = $kotaModel->where('kode_kota', $reservasiData['tujuan'])->get()->getResultArray();
            $kota = [
                'kota_asal' => $kotaasal,
                'kota_tujuan' => $kotatujuan
            ];


            if ($pembayaranData['status_pembayaran'] == "Sudah membayar") {



                $html = view('reservation/modal/sudahbayar/reservatin-info-body',  ['kursipenumpang' => $kursipenumpangData, 'pembayaran' => $pembayaranData, 'reservasi' => $reservasiData, 'kota' => $kota]);
                $html2 = view('reservation/modal/sudahbayar/reservatin-info-footer', ['id' => $id]);

                $response = [
                    'html' => $html,
                    'html2' => $html2
                ];

                return json_encode($response);
            } else {
                $html = view('reservation/modal/belumbayar/reservatin-info-body', ['kursipenumpang' => $kursipenumpangData, 'pembayaran' => $pembayaranData, 'reservasi' => $reservasiData, 'kota' => $kota]);
                $html2 = view('reservation/modal/belumbayar/reservatin-info-footer', ['id' => $id]);

                $response = [
                    'html' => $html,
                    'html2' => $html2
                ];

                return json_encode($response);
            }
        } else {
            "Data kursi tidak ada";
        }
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

            $reservasiModel->where('point_keberangkatan', $kotaasal['kode_kota']);
        }
        if (!empty($tujuan)) {
            $kotaModeltujuan = new KotaModel();
            $kotatujuan = $kotaModeltujuan->find($tujuan);

            $reservasiModel->where('tujuan', $kotatujuan['kode_kota']);
        }
        // dd([
        //     'asal' => $asal,
        //     'tujuan' => $tujuan,
        //     'tanggal_keberangkatan' => $tanggal_keberangkatan
        // ]);
        if (!empty($tanggal_keberangkatan)) {
            $reservasiModel->where('tanggal_reservasi', $tanggal_keberangkatan);
        }

        // Melakukan pencarian data berdasarkan kondisi WHERE
        $reservasiData = $reservasiModel->findAll();
        $reservasiData2 = [];

        $kursiModel = new KursipenumpangModel();
        foreach ($reservasiData as $datare) {
            $kursiTersedia = $kursiModel->where('id_reservasi', $datare['id_reservasi'])->where('tipe_reservasi', null)->get()
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
        $kursisebelumnya = $kursiModel->where('id_kursi', $id_kursi_sebelumnya)
            ->where("nomor_telepon IS NOT NULL")
            ->where("nama IS NOT NULL")->get()->getRowArray();
        if ($kursisebelumnya) {


            // ganti nilai sebelumnya ke baru
            $data = [
                'nomor_telepon' => null,
                'nama' => null,
                'id_diskon' => null,
                'checkin' => 'Belum Datang',
                'tipe_reservasi' => null
            ];
            $kursiModel->update($id_kursi_sebelumnya, $data);


            $pembayaranModel = new PembayaranModel();
            $pembayaranData = $pembayaranModel->where('id_kursi', $id_kursi_sebelumnya)->get()->getRowArray();
            $pembayaranModel->update($pembayaranData['id_pembayaran'], [
                'id_kursi' => $jadwal

            ]);
            // $pembayaranModel->update($id_kursi_sebelumnya, [
            //     'id_kursi' => $jadwal

            // ]);


            $data1 = [
                'nomor_telepon' => $kursisebelumnya['nomor_telepon'],
                'nama' => $kursisebelumnya['nama'],
                'id_diskon' => $kursisebelumnya['id_diskon'],
                'checkin' => $kursisebelumnya['checkin'],
                'tipe_reservasi' => $kursisebelumnya['tipe_reservasi']
            ];
            $jadwal = $kursiModel->update($jadwal, $data1);
            // Ubah hasil operasi update menjadi bentuk JSON
            $response = [
                'status' => 'success',
                'message' => 'Data berhasil diupdate',
                'data' => $jadwal
            ];

            // Set response code 200 (OK)
            $statusCode = ResponseInterface::HTTP_OK;

            // Ubah respons menjadi format JSON
            return $this->response->setJSON($response, $statusCode);
        } else {
            echo "Data reschedule tidak valid"; // Display an error message indicating invalid reschedule data
        }


        // return redirect()->back()->with('success', 'Reschedule berhasil dilakukan');
    }

    public function diskonreservasi($id)
    {

        $nomor_telepon = $this->request->getPost('nomor_telepon');
        $nama = $this->request->getPost('nama');
        $diskon = $this->request->getPost('diskon');

        $kursiModel = new KursiPenumpangModel();
        $kursiData = $kursiModel->find($id);
        if ($kursiData) {
            $data = [
                'nomor_telepon' => $nomor_telepon,
                'nama' => $nama,
                'id_diskon' => $diskon,
            ];

            $kursiModel->update($id, $data);

            // $reservasiModel = new ReservasiModel();
            // $reservasiData = $reservasiModel->where('id_reservasi', $kursiData['id_reservasi'])->get()->getResultArray();
            // dd( (new ReservationController())->getReservasi($kursiData['id_reservasi']));
            // return "Data kursi ada";
            return (new ReservationController())->kursiReservasi($kursiData['id_reservasi']);

            // return redirect()->back()->with('success', 'Data kursi ada');

            // Tambahkan logika atau perintah lain yang Anda perlukan setelah menyimpan data
        } else {
            return "Data Kursi Tidak ada";
        }
    }

    public function batalkanReservasi($id)
    {
        // Buat instance ReservasiModel
        $model = new KursipenumpangModel();

        // Cari data reservasi berdasarkan ID
        $reservasi = $model->find($id);

        // Jika data reservasi ditemukan
        if ($reservasi['tipe_reservasi'] == 'Biru') {
            // Update data nama dan nomor_telepon menjadi kosong

            // Masih ERROR
            // DD("ERROR");
            // $pelangganModel = new PelangganModel();
            // $pelangganData = $pelangganModel->where('id_pelanggan', $reservasi['id_pelanggan'])->get()->getRowArray();

            // if (!empty($pelangganData)) {
            //     // Jika $pelangganData tidak kosong, berarti data ditemukan, maka hapus data tersebut
            //     $pelangganModel->where('id_pelanggan', $pelangganData['id_pelanggan'])->delete();
            // }





            $pembayaranModel = new PembayaranModel();

            // Cari data pembayaran berdasarkan id_kursi
            $pembayaran = $pembayaranModel->where('id_kursi', $id)->first();

            if ($pembayaran) {
                // Hapus data pembayaran

                $pembayaranModel->where('id_kursi', $id)->delete();

                $jumlahTerhapus = $pembayaranModel->affectedRows();
                if ($jumlahTerhapus > 0) {
                    // Data berhasil dihapus
                    echo "Data berhasil dihapus.";
                } else {
                    // Data tidak ditemukan atau tidak terhapus
                    echo "Data tidak ditemukan atau gagal dihapus.";
                }
            }


            $data = [
                'nama' => null,
                'nomor_telepon' => null,
                'id_diskon' => null,
                'tipe_reservasi' => null,
                'id_kursi_parent' => null,
                'id_pelanggan' => null
            ];
            // dd($reservasi['id_kursi_parent']);

            // $model->update($reservasi['id_kursi_parent'], $data);

            $model->update($id, $data);

            // Tampilkan pesan sukses atau lakukan tindakan lain
            return (new ReservationController())->kursiReservasi($reservasi['id_reservasi']);
            // return redirect()->back()->with('success', 'Data tiket berhasil dibatalkan');

        } elseif ($reservasi['tipe_reservasi'] == 'Putih') {
            // Update data nama dan nomor_telepon menjadi kosong



            $pembayaranModel = new PembayaranModel();

            // Cari data pembayaran berdasarkan id_kursi
            $pembayaran = $pembayaranModel->where('id_kursi', $reservasi['id_kursi_parent'])->first();

            if ($pembayaran) {
                // Hapus data pembayaran
                $pembayaranModel->where('id_kursi', $id)->delete();
            }

            $data = [
                'nama' => '',
                'nomor_telepon' => '',
                'id_diskon' => null,
                'tipe_reservasi' => null,
                'id_kursi_parent' => null,
            ];

            $model->update($reservasi['id_kursi_parent'], $data);
            $model->update($id, $data);


            // Tampilkan pesan sukses atau lakukan tindakan lain
            return (new ReservationController())->kursiReservasi($reservasi['id_reservasi']);
        } else {
            // Tampilkan pesan error jika data reservasi tidak ditemukan
            return redirect()->back()->with('success', 'Data tiket tidak ada');
        }
    }
}
