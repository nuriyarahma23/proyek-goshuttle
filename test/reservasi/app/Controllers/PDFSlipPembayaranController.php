<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Paket;
use App\Models\DiskonModel;
use App\Models\KotaModel;
use App\Models\KursipenumpangModel;
use App\Models\LogReservasi;
use App\Models\MobilModel;
use App\Models\PaketModel;
use App\Models\PembayaranModel;
use App\Models\ReservasiModel;
use App\Models\SopirModel;
use Config\Database;
use Dompdf\Dompdf;

class PDFSlipPembayaranController extends BaseController
{
    public function index()
    {
        //
    }
    public function pdfreservasi($id_kursi)
    {
        $logoPath = base_url('logo_go_1.png');
        // $logoData = file_get_contents($logoPath);
        // $logoBase64 = base64_encode($logoData);


        $kursiReservasiModel = new KursipenumpangModel();
        $kursiReservasiData = $kursiReservasiModel->find($id_kursi);


        $tiketModel = new ReservasiModel();
        $tiketData = $tiketModel->find($kursiReservasiData['id_reservasi']);
        $kotaModel = new KotaModel();
        $kotaData = $kotaModel->findAll();
        $kotagrouping = [];
        foreach ($kotaData as $kd) {
            $kotagrouping[$kd['kode_kota']] = $kd;
        }

        $pembayaranModel = new PembayaranModel();
        $pembayaranData = $pembayaranModel->where('id_kursi', $kursiReservasiData['id_kursi'])->first();



        $diskonModel = new DiskonModel();
        $diskonData = $diskonModel->find($kursiReservasiData['id_diskon']);
        $diskonData1 = [];
        foreach ($diskonData as $diskondt) {
            $diskonData1[$diskondt['id_diskon']] = $diskondt;
        }

        $data = [
            'logo' => $logoPath,
            'tiketData' => $tiketData,
            'kodekota' => $kotagrouping,
            'kursiReservasiData' => $kursiReservasiData,
            'pembayaranData' => $pembayaranData,
            'diskon' => $diskonData1
        ];


        return view('pdf/slippembayaran', $data);


        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view("pdf/slippembayaran", $data));
        // $dompdf->set_option('isHtml5ParserEnabled', true);
        // // $dompdf->set_option('isRemoteEnabled', true);

        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('struk_pembayaran.pdf', ['Attachment' => 0]);
    }


    public function pdfreservasipaket($id_paket)
    {
        $logoPath = base_url('logo_go_1.png');


        $paketModel = new PaketModel();
        $paketData = $paketModel->find($id_paket);


        $tiketModel = new ReservasiModel();
        $tiketData = $tiketModel->find($paketData['id_reservasi']);
        $kotaModel = new KotaModel();
        $kotaData = $kotaModel->findAll();
        $kotagrouping = [];
        foreach ($kotaData as $kd) {
            $kotagrouping[$kd['kode_kota']] = $kd;
        }

        // $pembayaranModel = new PembayaranModel();
        // $pembayaranData = $pembayaranModel->where('id_kursi', $kursiReservasiData['id_kursi'])->first();

        $data = [
            'logo' => $logoPath,
            'tiketData' => $tiketData,
            'kodekota' => $kotagrouping,
            'paketData' => $paketData,
            // 'pembayaranData' => $pembayaranData
        ];


        return view('pdf/slippembayaranpaket', $data);


        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view("pdf/slippembayaran", $data));
        // $dompdf->set_option('isHtml5ParserEnabled', true);
        // // $dompdf->set_option('isRemoteEnabled', true);

        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('struk_pembayaran.pdf', ['Attachment' => 0]);
    }
    public function pdfmanifest($id_reservasi)
    {
        $logoPath = base_url('logo_go_1.png');
        // $logoData = file_get_contents($logoPath);
        // $logoBase64 = base64_encode($logoData);



        $tiketModel = new ReservasiModel();

        $tiketData = $tiketModel->find($id_reservasi);
        $kotaModel = new KotaModel();
        $kotaData = $kotaModel->findAll();
        $kotagrouping = [];
        foreach ($kotaData as $kd) {
            $kotagrouping[$kd['kode_kota']] = $kd;
        }

        $db = \Config\Database::connect(); // Menginisialisasi objek Query Builder

        // Melakukan kueri dengan Query Builder
        $kursiReservasiData = $db->table('kursi_penumpang')
            ->select('kursi_penumpang.nama, kursi_penumpang.nomor_kursi, pembayaran.*, kursi_penumpang.id_diskon')
            ->join('pembayaran', 'pembayaran.id_kursi = kursi_penumpang.id_kursi')
            ->where('kursi_penumpang.id_reservasi', $id_reservasi)
            ->orderBy('kursi_penumpang.nomor_kursi')
            ->get()
            ->getResultArray();

 

        $sopirModel = new SopirModel();
        $sopirData = $tiketData['id_sopir'] ? $sopirModel->find($tiketData['id_sopir']) : [
            'nama_sopir' => 'Sopir belum di set'
        ];

        $mobilModel = new MobilModel();
        $mobilData = $tiketData['id_mobil'] ? $mobilModel->find($tiketData['id_mobil']) : [
            'identitas' => 'Identitas belum di set',
            'nopol' => 'Mobil belum di set'
        ];

        $diskonModel  = new DiskonModel();
        $diskonData = $diskonModel->findAll();
        $diskonData2 = [];
        foreach ($diskonData as $dskndt) {
            $diskonData2[$dskndt['id_diskon']] = $dskndt;
        }

        $data = [
            'logo' => $logoPath,
            'tiketData' => $tiketData,
            'kodekota' => $kotagrouping,
            'kursiReservasiData' => $kursiReservasiData,
            // 'pembayaranData' => $pembayaranData,
            'sopirData' => $sopirData,
            'mobilData' => $mobilData,
            'diskon' => $diskonData2
        ];

        $logReservasiModel = new LogReservasi();
        $keterangankativitas = "point ". $tiketData['point_keberangkatan'] ." mencetak manifest";
        $datalog = [
            'id_reservasi' => $id_reservasi,
            'tipe_aktivitas' => "MANIFEST",
            'keterangan_aktivitas' => $keterangankativitas,
            'nama_terlibat' => session('nama'),
            'id_user' => session('id'),
            'created_at' => date('Y-m-d H:i:s'),

        ];
        $logReservasiModel->insert($datalog);
        return view('pdf/pdfmanifest', $data);
    }
}
