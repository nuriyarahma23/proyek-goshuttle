<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuBesarModel;
use App\Models\PaketModel;
use App\Models\PembayaranModel;
use App\Models\SettlementModel;
use App\Models\SettlementPaketModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class SettlementPaketController extends BaseController
{
  protected $data; // Definisikan properti $data sehingga dapat digunakan di seluruh metode kelas tersebut

  public function __construct()
  {
    $this->data = new SettlementPaketModel();
  }

  public function index()
  {


    $paketModel = new PaketModel();
    // Calculate the total 'harga' for each payment method
    // Get the DB instance
    $db = \Config\Database::connect();

    // Build the query using Query Builder
    $builder = $db->table('paket');
    $builder->selectSum('berat', 'total_berat');
    $builder->selectSum('jumlah_koli', 'total_koli');
    $builder->selectSum('harga', 'total_harga');
    $builder->where('id_user', session('id'));
    $builder->where('tersettle IS NULL');

    // Get the result as an array
    $result = $builder->get()->getRowArray();


    // dd([
    //   'qris' => $qris,
    //   'bankbca' => $bankBca,
    //   'bayarditempat' => $bayarDitempat
    // ]);


    $totaldata = [];
    $data = [
      'title' => 'Halaman Data Mobil',
      'tampildata' => $this->data->getAll(),
      'totaldata' => $result
    ];

    return view('settlementpaket/index', $data);
  }

  public function save()
  {
    $settlementModel = new SettlementModel();


    $paketModel = new PaketModel();
    // Calculate the total for each payment method where tersettle is true
    // $qris = $paketModel->where('id_user', session('id'))->where('metode_pembayaran', 'qris')->where('tersettle', false)->selectSum('harga', 'total_harga')->get()->getRowArray();
    // $bankBca = $paketModel->where('id_user', session('id'))->where('metode_pembayaran', 'bankbca')->where('tersettle', false)->selectSum('harga', 'total_harga')->get()->getRowArray();
    // $bayarDitempat = $paketModel->where('id_user', session('id'))->where('metode_pembayaran', 'bayarTempat')->where('tersettle', false)->selectSum('harga', 'total_harga')->get()->getRowArray();

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
    $total = $paketModel
      ->where('id_user', session('id'))
      ->where('tersettle IS NULL')
      ->selectSum('harga', 'total_harga')
      ->get()
      ->getRowArray();

    // Assuming you have the data ready, create an associative array for insertion




    $insertData = [
      'id_user' => session('id'), // Replace with the actual value for id_user
      'tanggal' => date('Y-m-d'),
      'total' =>  isset($total['total_harga']) ? $total['total_harga'] : 0, // Replace with the actual value for total
      'status' => 'Paket', // Replace with the actual value for status
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
      'keterangan' => 'Transaksi settlement paket', // Kolom 'keterangan' diisi dengan keterangan data sesuai kebutuhan
      'tipe' => 'debit',          // Kolom 'tipe' disesuaikan dengan tipe transaksi (misalnya 'Debit' atau 'Kredit')
      'nominal' => isset($total['total_harga']) ? $total['total_harga'] : 0,        // Kolom 'nominal' diisi dengan nominal transaksi (misalnya 1000000)
      'id_transaksi' => 1,    // Kolom 'id_transaksi' diisi dengan ID transaksi yang terkait (jika ada)
    ];

    // Selanjutnya, Anda bisa menggunakan model BukuBesarModel untuk melakukan insert ke tabel 'bukubesar':
    $BukuBesarModel->insert($data);


    // Get the id_user from the session
    $idUser = session('id');

    // Find records where id_user = $idUser and tersettle = false
    $recordsToUpdate = $paketModel->where('id_user', $idUser)
      ->where('tersettle IS NULL')->findAll();

    // If there are records to update, set tersettle to true for each record and update the database
    if (!empty($recordsToUpdate)) {
      foreach ($recordsToUpdate as $record) {
        $record['tersettle'] = 1;
        // Update the record in the database
        $paketModel->update($record['id'], $record);
      }
    }


    return redirect()->to('/');
  }

  public function tambah()
  {
    $data = [
      'title' => 'Halaman Tambah Data Mobil',
    ];

    return view('master/mobil/index', $data);
  }

  public function proses_tambah()
  {
    $rules = [
      'identitas' => [
        'label' => "Identitas",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'nopol' => [
        'label' => "Nomor Polisi",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'km_terakhir' => [
        'label' => "Kilometer Terakhir",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'status' => [
        'label' => "Status",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
    ];

    if ($this->validate($rules)) {
      $data = [
        'identitas' => $this->request->getVar('identitas'),
        'nopol' => $this->request->getVar('nopol'),
        'km_terakhir' => $this->request->getVar('km_terakhir'),
        'status' => $this->request->getVar('status'),
      ];

      session()->setFlashdata('status', 'Data mobil berhasil ditambahkan!');

      $this->data->insert($data);
      return redirect()
        ->to(base_url('tampildata-mobil'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Data berhasil ditambah');
    } else {
      $data = [
        'title' => 'Halaman Tambah Data Mobil',
      ];

      return view('master/mobil/index', $data);
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Halaman Edit Data Mobil',
      'tampildata' => $this->data->cekDataMobil($id),
    ];

    return view('master/mobil/index', $data);
  }

  public function proses_edit()
  {
    $loadmodel = $this->request->getVar('id');
    $data = [
      'identitas' => $this->request->getVar('identitas'),
      'nopol' => $this->request->getVar('nopol'),
      'km_terakhir' => $this->request->getVar('km_terakhir'),
      'status' => $this->request->getVar('status'),
    ];
    session()->setFlashdata('status', 'Data mobil berhasil diupdate!');
    $this->data->update($loadmodel, $data);
    return redirect()
      ->to(base_url('tampildata-mobil'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil diupdate');
  }

  public function hapus($id)
  {
    $where = [
      'id' => $id
    ];
    $this->data->delete($id);
    session()->setFlashdata('status', 'Data mobil berhasil dihapus!');
    return redirect()
      ->to(base_url('tampildata-mobil'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil dihapus');
  }
}
