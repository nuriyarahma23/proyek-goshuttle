<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Kota;
use App\Models\KotaModel;
use App\Models\KursipenumpangModel;
use App\Models\LogReservasi;
use App\Models\PelangganModel;
use App\Models\PembayaranModel;
use App\Models\ReservasiModel;
use App\Models\UserModel;
use PhpParser\Node\Expr\Print_;

class ReservationController extends BaseController
{

    protected $pembayaranModel;
    protected $kursiPenumpangModel;

    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
        $this->kursiPenumpangModel = new KursiPenumpangModel();

        $this->hapusPembayaranMelebihiBatas();
    }
    public function hapusPembayaranMelebihiBatas()
    {
        // Ambil data pembayaranModel yang memenuhi kriteria
        $today = date('Y-m-d H:i:s');

        $dataPembayaran = $this->pembayaranModel->where("tanggal_batas_pembayaran < '$today'")
            ->whereIn('status_pembayaran', ['Belum membayar', 'Konfirmasi pembayaran'])
            ->findAll();
        // dd($dataPembayaran);

        if ($dataPembayaran) {
            foreach ($dataPembayaran as $pembayaran) {
                $idKursi = $pembayaran['id_kursi'];

                // Hapus data pembayaran dari tabel pembayaranModel
                $this->pembayaranModel->delete($pembayaran['id_pembayaran']);

                // Kosongkan nilai nama, nomor telepon, dan id_diskon pada KursiPenumpangModel terkait
                $this->kursiPenumpangModel->update($idKursi, [
                    'tipe_reservasi' => null,
                    'nama' => '',
                    'nomor_telepon' => '',
                    'id_diskon' => null
                ]);
            }

            // echo 'Data pembayaran yang melebihi batas pembayaran berhasil dihapus dan data terkait diperbarui.';
        } else {
            // echo 'Tidak ada data pembayaran yang melebihi batas pembayaran.';
        }
    }

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

            $reservasiModel->where('point_keberangkatan', $kotaasal['kode_kota']);
        }
        if (!empty($tujuan)) {
            $kotaModeltujuan = new KotaModel();
            $kotatujuan = $kotaModeltujuan->find($tujuan);

            $reservasiModel->where('tujuan', $kotatujuan['kode_kota']);
        }
        if (!empty($tanggal_keberangkatan)) {
            $reservasiModel->where('tanggal_reservasi', $tanggal_keberangkatan);
        }

        // Melakukan pencarian data berdasarkan kondisi WHERE
        $reservasiData = $reservasiModel->orderBy('tanggal_reservasi', 'asc')
        ->orderBy('jam', 'asc')->findAll();
        $reservasiData2 = [];
        foreach ($reservasiData as $datare) {

            $model = new KursipenumpangModel();

            $hitungkursitersedia = $model->where('id_reservasi', $datare['id_reservasi'])->where('tipe_reservasi', null)
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

    public function getReservasi($id = null)
    {


        if (is_numeric($id)) {
            $reservasiModel = new ReservasiModel();
            $kursiPenumpangModel = new KursipenumpangModel();

            // Mengambil data Reservasi dengan id_reservasi 1

            $reservasi = $reservasiModel->find($id);
            $db = \Config\Database::connect();
            $reservasi0 = $db->query("SELECT * , reservasi.status as status_reservasi FROM `reservasi` LEFT JOIN `sopir` ON sopir.id = reservasi.id_sopir LEFT JOIN `mobil` ON mobil.id = reservasi.id_mobil WHERE reservasi.id_reservasi = $id;")->getResultArray();
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


            $logReservasiModel = new LogReservasi();
            $logReservasiData = $logReservasiModel->where('id_reservasi', $id)->get()->getResultArray();
            // Mengambil tampilan HTML dari view
            $html = view('reservation/reservation', ['Nomorkursi' => $Nomorkursi, 'idReservasi' => $id, 'reservasi' => $reservasi, 'mobil' => $mobil, 'sopir' => $sopir, 'logreservasi' => $logReservasiData]);

            // Mengembalikan respons berupa HTML
            return $html;
        } else {
            $html = "<h1>Reservasi belum dipilih</html>";
            return $html;
        }
    }

    public function checkmultireservasi($id)
    {
        $reservasiModel = new ReservasiModel();
        $reservasiData = $reservasiModel->find($id);
        // Cek apakah id_reservasi_pasangan terisi
        if ($reservasiData['jenis_reservasi'] == 'multi') {
            // Jika terisi, lakukan join table dengan tabel yang sama
            $kursiReservasiModel = new KursipenumpangModel();
            $kursiReservasiData1 = $kursiReservasiModel->where('id_reservasi', $reservasiData['id_reservasi'])->get()->getResultArray();
            $kursiReservasiData2 = $kursiReservasiModel->where('id_reservasi', $reservasiData['id_reservasi_pasangan'])->get()->getResultArray();


            // Gabung dan Filter data reservasi
            for ($i = 0; $i < count($kursiReservasiData1); $i++) {
                if ($kursiReservasiData1[$i]['tipe_reservasi'] == "Biru") {
                    if ($kursiReservasiData2[$i]['tipe_reservasi'] == null) {
                        // dd($kursiReservasiData1[$i]);
                        $data = [
                            'id_kursi_parent' => $kursiReservasiData1[$i]['id_kursi'],

                            'nama' => $kursiReservasiData1[$i]['nama'],
                            'nomor_telepon' => $kursiReservasiData1[$i]['nomor_telepon'],
                            'id_diskon' => $kursiReservasiData1[$i]['id_diskon'],
                            'tipe_reservasi' => 'Putih',
                            'checkin' => $kursiReservasiData1[$i]['checkin']
                        ];
                        $kursiReservasiModel->update($kursiReservasiData2[$i]['id_kursi'], $data);
                    }
                    if ($kursiReservasiData2[$i]['tipe_reservasi'] == "Putih") {
                        // dd($kursiReservasiData1[$i]);

                        $data = [
                            'id_kursi_parent' => $kursiReservasiData1[$i]['id_kursi'],

                            'nama' => $kursiReservasiData1[$i]['nama'],
                            'nomor_telepon' => $kursiReservasiData1[$i]['nomor_telepon'],
                            'id_diskon' => $kursiReservasiData1[$i]['id_diskon'],
                            'tipe_reservasi' => 'Putih',
                            'checkin' => $kursiReservasiData1[$i]['checkin']
                        ];
                        $kursiReservasiModel->update($kursiReservasiData2[$i]['id_kursi'], $data);
                    }

                    # code...
                }
                if ($kursiReservasiData2[$i]['tipe_reservasi'] == "Biru") {
                    if ($kursiReservasiData1[$i]['tipe_reservasi'] == null) {
                        // dd($kursiReservasiData1[$i]);
                        $idKursi = $kursiReservasiData1[$i]['id_kursi'];

                        $data = [
                            'id_kursi_parent' => $kursiReservasiData2[$i]['id_kursi'],
                            'nama' => $kursiReservasiData2[$i]['nama'],
                            'nomor_telepon' => $kursiReservasiData2[$i]['nomor_telepon'],
                            'id_diskon' => $kursiReservasiData2[$i]['id_diskon'],
                            'tipe_reservasi' => 'Putih',
                            'checkin' => $kursiReservasiData2[$i]['checkin'],
                        ];
                        $kursiReservasiModel->update($kursiReservasiData1[$i]['id_kursi'], $data);
                    }
                    if ($kursiReservasiData1[$i]['tipe_reservasi'] == "Putih") {
                        // dd($kursiReservasiData1[$i]);
                        $idKursi = $kursiReservasiData1[$i]['id_kursi'];

                        $data = [
                            'id_kursi_parent' => $kursiReservasiData2[$i]['id_kursi'],
                            'nama' => $kursiReservasiData2[$i]['nama'],
                            'nomor_telepon' => $kursiReservasiData2[$i]['nomor_telepon'],
                            'id_diskon' => $kursiReservasiData2[$i]['id_diskon'],
                            'tipe_reservasi' => 'Putih',
                            'checkin' => $kursiReservasiData2[$i]['checkin']
                        ];
                        $kursiReservasiModel->update($kursiReservasiData1[$i]['id_kursi'], $data);
                    }
                }



                if ($kursiReservasiData1[$i]['tipe_reservasi'] == "Putih") {
                    if ($kursiReservasiData2[$i]['tipe_reservasi'] == null) {
                        // dd($kursiReservasiData1[$i]);
                        $idKursi = $kursiReservasiData1[$i]['id_kursi'];

                        $data = [
                            'id_kursi_parent' => null,
                            'nama' => '',
                            'nomor_telepon' => '',
                            'id_diskon' => null,
                            'tipe_reservasi' => null,
                            'checkin' => "Belum Datang",
                        ];
                        $kursiReservasiModel->update($kursiReservasiData1[$i]['id_kursi'], $data);
                    }


                    # code...
                }
                if ($kursiReservasiData2[$i]['tipe_reservasi'] == "Putih") {
                    if ($kursiReservasiData1[$i]['tipe_reservasi'] == null) {
                        // dd($kursiReservasiData1[$i]);
                        $idKursi = $kursiReservasiData1[$i]['id_kursi'];

                        $data = [
                            'id_kursi_parent' => null,
                            'nama' => '',
                            'nomor_telepon' => '',
                            'id_diskon' => null,
                            'tipe_reservasi' => null,
                            'checkin' => "Belum Datang",
                        ];
                        $kursiReservasiModel->update($kursiReservasiData2[$i]['id_kursi'], $data);
                    }
                }
            }
        } else {
            // Jika tidak terisi, ambil data reservasi biasa
            $reservasiData = $reservasiModel->find($id);
        }
    }
    public function kursiReservasi($id)
    {
        $this->checkmultireservasi($id);

        $kursiPenumpangModel = new KursipenumpangModel();

        // Mengambil data Reservasi dengan id_reservasi 1
        $db = \Config\Database::connect();
        $reservasi0 = $db->query("SELECT * FROM `reservasi` LEFT JOIN `sopir` ON sopir.id = reservasi.id_sopir LEFT JOIN `mobil` ON mobil.id = reservasi.id_mobil WHERE   reservasi.id_reservasi = $id;")->getResultArray();

        $reservasi = $reservasi0[0];

        // Mengambil data KursiPenumpang yang terkait dengan Reservasi

        // $kursiPenumpang2 = $db->query("SELECT kursi_penumpang.*, pembayaran.status_pembayaran 
        // FROM kursi_penumpang 
        // LEFT JOIN pembayaran ON  pembayaran.id_kursi = kursi_penumpang.id_kursi
        // WHERE kursi_penumpang.id_reservasi = " . $reservasi['id_reservasi'])->getResultArray();
        $kursiPenumpang2 = $db->query("SELECT kursi_penumpang.*, pembayaran.status_pembayaran 
        FROM kursi_penumpang 
        LEFT JOIN pembayaran ON 
            (kursi_penumpang.tipe_reservasi = 'Biru' AND pembayaran.id_kursi = kursi_penumpang.id_kursi) OR
            (kursi_penumpang.tipe_reservasi = 'Putih' AND pembayaran.id_kursi = kursi_penumpang.id_kursi_parent)
        WHERE kursi_penumpang.id_reservasi = " . $reservasi['id_reservasi'])->getResultArray();

        // $kursiPenumpang = $kursiPenumpangModel->where('id_reservasi', $reservasi['id_reservasi'])->findAll();
        // dd($kursiPenumpang);
        $kursiPenumpang = $kursiPenumpang2;
        $nomorKursiPenumpang = [];
        $no = 1;
        foreach ($kursiPenumpang as $kursi) {
            $nomorKursiPenumpang[$kursi['nomor_kursi']] = $kursi;
            $no++;
        }


        // Menampilkan Mobil
        $db = db_connect();
        $builder = $db->table('mobil');
        $mobil = $builder->get()->getResult();

        // Menampilkan data Sopir
        $builder1 = $db->table('sopir');
        $sopir = $builder1->get()->getResult();

        // Konten HTML yang akan dimuat dari controller

        // Mengambil tampilan HTML dari view

        $diskon =  $db->table('diskon')->get()->getResultArray();


        $html = view('reservation/menu/kursireservasi', ['diskon' => $diskon, 'Nomorkursi' => $nomorKursiPenumpang, 'idReservasi' => $id, 'reservasi' => $reservasi, 'mobil' => $mobil, 'sopir' => $sopir]);

        // Mengembalikan respons berupa HTML
        return $html;
    }
    public function checkinreservasi($id)
    {
        $kursiPenumpangModel = new KursipenumpangModel();
        $penumpang = $kursiPenumpangModel->find($id);

        if ($penumpang !== null) {

            $data = [
                'checkin' => 'Sudah Datang',
            ];

            $kursiPenumpangModel->update([$id], $data);

            // Simpan pesan sukses menggunakan Flash Data
            session()->setFlashdata('message', 'Status check-in berhasil diperbarui.');
            session()->setFlashdata('type', 'success');
        } else {
            // Simpan pesan gagal menggunakan Flash Data
            session()->setFlashdata('message', 'Gagal memperbarui status check-in.');
            session()->setFlashdata('type', 'danger');
        }

        return redirect()->back();
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
            $pelangganModel = new PelangganModel();
            $pelangganData = $pelangganModel->where('no_telepon', $nomorTelepon)->where('nama', $nama)->get()->getRowArray();
            if (empty($pelangganData)) {
                // Jika $pelangganData kosong, berarti tidak ada data yang sesuai, maka generate data baru
                $dataPelanggan = [
                    'nama' => $nama,
                    'no_telepon' => $nomorTelepon,
                ];

                // Simpan data pelanggan baru ke dalam database
                $pelangganId = $pelangganModel->insert($dataPelanggan);
            } else {
                // Jika $pelangganData tidak kosong, berarti ada data yang sesuai, maka ambil ID-nya
                $pelangganId = $pelangganData['id_pelanggan'];
            }
            // Update data nomor telepon dan nama
            $kursiPenumpangid =  $kursiPenumpangModel->update($kursiPenumpang['id_kursi'], [
                'nomor_telepon' => $nomorTelepon,
                'nama' => $nama,
                'tipe_reservasi' => 'Biru',
                'id_pelanggan' => $pelangganId
            ]);

            $pembayaranModel = new PembayaranModel();


            // Cari data pembayaran berdasarkan id_kursi
            $pembayaran = $pembayaranModel->where('id_kursi', $kursiReservasi)->get()->getResultArray();

            if (!$pembayaran) {
                // Generate data pembayaran baru
                $tanggalBatasPembayaran = date('Y-m-d H:i:s', strtotime('+1 hour'));
               
                $reservasiModel = new ReservasiModel();
                $reservasiData = $reservasiModel->where('id_reservasi', $kursiPenumpang['id_reservasi'])->get()->getRowArray();

                $dataPembayaran = [
                    'id_kursi' => $kursiReservasi,
                    'harga' => $reservasiData['harga_tiket'],
                    'status_pembayaran' => 'Belum membayar',
                    'tanggal_batas_pembayaran' => $tanggalBatasPembayaran,
                    'id_user' =>  session('id')
                ];

                // Simpan data pembayaran baru ke database
                $pembayaranModel->insert($dataPembayaran);

                $pembayaran = $dataPembayaran;
            }

            // Mengembalikan respons atau melakukan redirect jika diperlukan
        } else {
            // Data tidak ditemukan, berikan respons atau pesan error
        }
    }
}
