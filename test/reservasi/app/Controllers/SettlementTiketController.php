<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuBesarModel;
use App\Models\PembayaranModel;
use App\Models\SettlementModel;
use App\Models\SettlementTiketModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class SettlementTiketController extends BaseController
{
  protected $data; // Definisikan properti $data sehingga dapat digunakan di seluruh metode kelas tersebut

  public function __construct()
  {
    $this->data = new SettlementTiketModel();
  }

  public function index()
  {

    $pembayaranModel = new PembayaranModel();
    // Calculate the total 'harga' for each payment method
    $qris = $pembayaranModel->where('id_user', session('id'))->where('metode_pembayaran', 'qris')->where('status_pembayaran', 'Sudah membayar')
      ->where('tersettle IS NULL')->selectSum('harga', 'total_harga')->get()->getRowArray();
    $bankBca = $pembayaranModel->where('id_user', session('id'))->where('metode_pembayaran', 'bankbca')->where('status_pembayaran', 'Sudah membayar')
      ->where('tersettle IS NULL')->selectSum('harga', 'total_harga')->get()->getRowArray();
    $bayarDitempat = $pembayaranModel->where('id_user', session('id'))->where('metode_pembayaran', 'bayarTempat')->where('status_pembayaran', 'Sudah membayar')
      ->where('tersettle IS NULL')->selectSum('harga', 'total_harga')->get()->getRowArray();

    // dd([
    //   'qris' => $qris,
    //   'bankbca' => $bankBca,
    //   'bayarditempat' => $bayarDitempat
    // ]);

    $data = [
      'title' => 'Halaman Data Settlement',
      'tampildata' => $this->data->getAll(),
      'tampilrekap' => $this->data->getRekap(),
      'qris' => $qris,
      'bankBca' => $bankBca,
      'bayarDitempat' => $bayarDitempat
    ];

    return view('settlementtiket/index', $data);
  }
  public function save()
  {
    $settlementModel = new SettlementModel();


    $pembayaranModel = new PembayaranModel();
    // Calculate the total for each payment method where tersettle is true
    // $qris = $pembayaranModel->where('id_user', session('id'))->where('metode_pembayaran', 'qris')->where('tersettle', false)->selectSum('harga', 'total_harga')->get()->getRowArray();
    // $bankBca = $pembayaranModel->where('id_user', session('id'))->where('metode_pembayaran', 'bankbca')->where('tersettle', false)->selectSum('harga', 'total_harga')->get()->getRowArray();
    // $bayarDitempat = $pembayaranModel->where('id_user', session('id'))->where('metode_pembayaran', 'bayarTempat')->where('tersettle', false)->selectSum('harga', 'total_harga')->get()->getRowArray();

    // dd([
    //   'id_user'=> session('id'),
    //   'qris' => $qris,
    //   'bankBca' => $bankBca,
    //   'bayarDitempat' => $bayarDitempat
    // ]);
    // // Get the 'total_harga' values from each payment method, or set them to 0 if not available
    // $totalHargaQris = isset($qris['total_harga']) ? $qris['total_harga'] : 0;
    // $totalHargaBankBca = isset($bankBca['total_harga']) ? $bankBca['total_harga'] : 0;
    // $totalHargaBayarDitempat = isset($bayarDitempat['total_harga']) ? $bayarDitempat['total_harga'] : 0;

    // // Calculate the grand total by adding up the 'total_harga' values from each payment method
    $total = $pembayaranModel
      ->where('id_user', session('id'))
      ->where('status_pembayaran', 'Sudah membayar')
      ->where('tersettle IS NULL')
      ->selectSum('harga', 'total_harga')
      ->get()
      ->getRowArray();

    // Assuming you have the data ready, create an associative array for insertion




    $insertData = [
      'id_user' => session('id'), // Replace with the actual value for id_user
      'tanggal' => date('Y-m-d'),
      'total' =>  isset($total['total_harga']) ? $total['total_harga'] : 0, // Replace with the actual value for total
      'status' => 'Tiket', // Replace with the actual value for status
      'catatan' => $this->request->getVar('catatan'), // Replace with the actual value for catatan
    ];


    // Insert the data into the $settlementModel
    $settlementModel->insert($insertData);
    // Redirect to the URL defined in the route ('/')



    $BukuBesarModel = new BukuBesarModel();
    // Ambil tanggal dan waktu saat ini
    $tanggal_waktu = date('Y-m-d H:i:s');

    // Data untuk diinsert ke tabel 'bukubesar'
    $data = [
      'tanggal' => $tanggal_waktu, // Kolom 'tanggal' diisi dengan tanggal dan waktu saat ini
      'kategori' => 'Pemasukan',   // Kolom 'kategori' disesuaikan dengan kategori data (misalnya 'Pemasukan' atau 'Pengeluaran')
      'keterangan' => 'Transaksi settlement tiket', // Kolom 'keterangan' diisi dengan keterangan data sesuai kebutuhan
      'tipe' => 'debit',          // Kolom 'tipe' disesuaikan dengan tipe transaksi (misalnya 'Debit' atau 'Kredit')
      'nominal' => isset($total['total_harga']) ? $total['total_harga'] : 0,        // Kolom 'nominal' diisi dengan nominal transaksi (misalnya 1000000)
      'id_transaksi' => 1,    // Kolom 'id_transaksi' diisi dengan ID transaksi yang terkait (jika ada)
    ];

    // Selanjutnya, Anda bisa menggunakan model BukuBesarModel untuk melakukan insert ke tabel 'bukubesar':
    $BukuBesarModel->insert($data);


    // Get the id_user from the session
    $idUser = session('id');

    // Find records where id_user = $idUser and tersettle = false
    $recordsToUpdate = $pembayaranModel->where('id_user', $idUser)->where('status_pembayaran', 'Sudah membayar')
      ->where('tersettle IS NULL')->findAll();

    // If there are records to update, set tersettle to true for each record and update the database
    if (!empty($recordsToUpdate)) {
      foreach ($recordsToUpdate as $record) {
        $record['tersettle'] = 1;
        // Update the record in the database
        $pembayaranModel->update($record['id_pembayaran'], $record);
      }
    }


    return redirect()->to('/');
  }
  public function tambah()
  {
    $data = [
      'title' => 'Halaman Save Settlement',
    ];

    return view('master/mobil/index', $data);
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Halaman Edit Data Mobil',
      'tampildata' => $this->data->cekDataMobil($id),
    ];

    return view('master/mobil/index', $data);
  }
}
