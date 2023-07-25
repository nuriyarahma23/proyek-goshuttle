<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use App\Models\KotaModel;
use App\Models\ReservasiModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use DateTime;

class JadwalController extends BaseController
{
  protected $data;
  protected $helpers = ['form'];
  public function __construct()
  {
    $this->data = new ReservasiModel();
  }


  public function index()
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


    $data = [
      'title' => 'Buat Jadwal',
      'tampildata' => $this->data->getAll(),
      'grup_kota' => $grup_kota,
      'kota' => $kota
    ];

    return view('jadwal/index', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Halaman Tambah Jadwal',
    ];

    return view('jadwal/index', $data);
  }

  public function store()
  {
    $rules = [
      'dari_tgl' => [
        'label' => "Dari Tanggal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'sampai_tgl' => [
        'label' => "Sampai Tanggal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'tujuan' => [
        'label' => "Tujuan",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'jml_kursi' => [
        'label' => "Jumlah Kursi",
        'rules' => "required|numeric",
        'errors' => [
          'required' => "{field} harus diisi",
          'numeric' => "{field} harus diisi dengan angka",
        ],
      ],
      'harga_tiket' => [
        'label' => "Harga Tiket",
        'rules' => "required|numeric",
        'errors' => [
          'required' => "{field} harus diisi",
          'numeric' => "{field} harus diisi dengan angka",
        ],
      ],
      'point_keberangkatan' => [
        'label' => "Point Keberangkatan",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'jam' => [
        'label' => "Jam",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
    ];

    if ($this->validate($rules)) {
      $data = [
        'dari_tgl' => $this->request->getVar('dari_tgl'),
        'sampai_tgl' => $this->request->getVar('sampai_tgl'),
        'tujuan' => $this->request->getVar('tujuan'),
        'jml_kursi' => $this->request->getVar('jml_kursi'),
        'harga_tiket' => $this->request->getVar('harga_tiket'),
        'point_keberangkatan' => $this->request->getVar('point_keberangkatan'),
        'jam' => $this->request->getVar('jam'),
      ];

      session()->setFlashdata('success', 'Jadwal berhasil ditambah!');





      $startDate = $data['dari_tgl'];
      $endDate = $data['sampai_tgl'];
      $kotaModel = new KotaModel();
      $currentDate = $startDate;
      while ($currentDate <= $endDate) {
        // Proses yang ingin dilakukan pada setiap tanggal
        $tujuan = $kotaModel->find($data['tujuan'])['kode_kota'];
        $point_keberangkatan = $kotaModel->find($data['point_keberangkatan'])['kode_kota'];

        $datareservasi = [
          'tanggal_reservasi' => $currentDate,
          'tujuan' => $tujuan,
          'jml_kursi' => $data['jml_kursi'],
          'harga_tiket' => $data['harga_tiket'],
          'point_keberangkatan' => $point_keberangkatan,
          'jam' => $data['jam'],
        ];
        $this->data->insert($datareservasi);

        // Menginkrement tanggal
        $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
      }







      return redirect()
        ->to(base_url('jadwal'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Jadwal berhasil ditambah');
    } else {
      $data = [
        'title' => 'Halaman Tambah Jadwal',
      ];
    }

    return view('jadwal/index', $data);
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Halaman Edit Jadwal',
      'tampildata' => $this->data->cekJadwal($id),
    ];

    return view('jadwal/index', $data);
  }

  public function update()
  {
    $loadmodel = $this->request->getVar('id_reservasi');

    $kotaModel = new KotaModel();


    // Proses yang ingin dilakukan pada setiap tanggal
    $tujuan = $kotaModel->find($this->request->getVar('tujuan'))['kode_kota'];
    $point_keberangkatan = $kotaModel->find($this->request->getVar('point_keberangkatan'))['kode_kota'];
    $data = [
      // 'dari_tgl' => $this->request->getVar('dari_tgl'),
      // 'sampai_tgl' => $this->request->getVar('sampai_tgl'),
      'tanggal_reservasi' => $this->request->getVar('tanggal_reservasi'),
      'tujuan' => $tujuan,
      'jml_kursi' => $this->request->getVar('jml_kursi'),
      'harga_tiket' => $this->request->getVar('harga_tiket'),
      'point_keberangkatan' => $point_keberangkatan,
      'jam' => $this->request->getVar('jam'),
    ];
    session()->setFlashdata('success', 'Jadwal berhasil diupdate!');
    $this->data->update($loadmodel, $data);
    return redirect()
      ->to(base_url('jadwal'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil diupdate');
  }

  public function hapus($id)
  {
    $where = [
      'id_jadwal' => $id
    ];
    $this->data->delete($id);
    session()->setFlashdata('success', 'Jadwal berhasil dihapus!');
    return redirect()
      ->to(base_url('jadwal'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil dihapus');
  }



  public function buatjadwal()
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
    $data = [
      'title' => 'Buat Jadwal',
      //   'tampildata' => $this->jadwal->getAll(),
      'grup_kota' => $grup_kota,
      'kota' => $kota
    ];

    return view('jadwal/buatjadwal', $data);
  }

  public function tambah_multiroute()
  {
    // dd("towewew");

    $rules = [
      'tanggal_awal' => [
        'label' => "Dari Tanggal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'tanggal_akhir' => [
        'label' => "Sampai Tanggal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'tujuan' => [
        'label' => "Tujuan",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'jumlah_kursi' => [
        'label' => "Jumlah Kursi",
        'rules' => "required|numeric|greater_than_equal_to[8]",
        'errors' => [
          'required' => "{field} harus diisi",
          'numeric' => "{field} harus diisi dengan angka",
        ],
      ],
      'harga' => [
        'label' => "Harga",
        'rules' => "required|numeric",
        'errors' => [
          'required' => "{field} harus diisi",
          'numeric' => "{field} harus diisi dengan angka",
        ],
      ],
      'asal' => [
        'label' => "Asal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'tujuan' => [
        'label' => "Tujuan",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'jam' => [
        'label' => "Jam",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
      'harga' => [
        'label' => "Harga",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi",
        ],
      ],
    ];

    if ($this->validate($rules)) {
      $data = [
        'tanggal_awal' => $this->request->getVar('tanggal_awal'),
        'tanggal_akhir' => $this->request->getVar('tanggal_akhir'),
        'jumlah_kursi' => $this->request->getVar('jumlah_kursi'),
        'asal' => $this->request->getVar('asal'),
        'tujuan' => $this->request->getVar('tujuan'),
        'jam' => $this->request->getVar('jam'),
        'harga' => $this->request->getVar('harga'),
      ];



      $startDate = $data['tanggal_awal'];
      $endDate = $data['tanggal_akhir'];
      $kotaModel = new KotaModel();
      $currentDate = $startDate;


      $kota_tujuan = $data['tujuan'];


      $harga = $data['harga'];
      $jam = $data['jam'];
      $asal = $data['asal'];
      while ($currentDate <= $endDate) {

        $tujuan1 = $kotaModel->find($kota_tujuan[0])['kode_kota'];
        $point_keberangkatan1 = $kotaModel->find($asal[0])['kode_kota'];

        $datareservasi1 = [
          'tanggal_reservasi' => $currentDate,
          'tujuan' => $tujuan1,
          'jml_kursi' =>  $data['jumlah_kursi'],
          'harga_tiket' => $harga[0],
          'point_keberangkatan' => $point_keberangkatan1,
          'jam' => $jam[0],
          'jenis_reservasi' => 'multi'
        ];

        $reservasiId1 = $this->data->insert($datareservasi1);



        $tujuan2 = $kotaModel->find($kota_tujuan[1])['kode_kota'];
        $point_keberangkatan2 = $kotaModel->find($asal[1])['kode_kota'];

        $datareservasi2 = [
          'tanggal_reservasi' => $currentDate,
          'tujuan' => $tujuan2,
          'jml_kursi' =>  $data['jumlah_kursi'],
          'harga_tiket' => $harga[1],
          'point_keberangkatan' => $point_keberangkatan2,
          'jam' => $jam[1],
          'jenis_reservasi' => 'multi'
        ];

        $reservasiId2 = $this->data->insert($datareservasi2);
        // Data yang akan diupdate pada tabel "jadwal"
        $dataJadwal1 = [
          'id_reservasi_pasangan' => $reservasiId2
        ];
        $this->data->update($reservasiId1, $dataJadwal1);


        // Data yang akan diupdate pada tabel "jadwal"
        $dataJadwal2 = [
          'id_reservasi_pasangan' => $reservasiId1
        ];
        // Lakukan update data pada model "jadwal" berdasarkan ID
        $this->data->update($reservasiId2, $dataJadwal2);


        // Menginkrement tanggal
        $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
      }

      // Set flash data to indicate success
      session()->setFlashdata('data_form', $data);
      session()->setFlashdata('success', 'Jadwal berhasil ditambah!');

      // $this->data->insert($data);
      return redirect()
        ->to(base_url('jadwalmultiroute'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Jadwal berhasil ditambah');
    } else {

      // Jika validasi gagal, simpan pesan kesalahan dalam session
      $pesanKesalahan = $this->validator->listErrors();
      $session = \Config\Services::session();
      $session->setFlashdata('success', $pesanKesalahan);

      // Redirect kembali ke halaman sebelumnya
      return redirect()->back();
    }

    // return view('jadwal/buatjadwal', $data);
  }

  public function kelola_jadwal()
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
    $data = [
      'title' => 'Kelola Jadwal',
      'grup_kota' => $grup_kota,
      'kota' => $kota
      //   'tampildata' => $this->jadwal->getAll(),
    ];

    return view('jadwal/kelola_jadwal', $data);
  }

  public function cari()
  {
    $tanggal = $this->request->getVar('tanggal');
    $asal = $this->request->getVar('asal');
    $tujuan = $this->request->getVar('tujuan');
    // $tanggal = "2023-07-15";
    // $asal = [];
    // $tujuan = [];

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
    if (!empty($tanggal)) {
      $reservasiModel->where('tanggal_reservasi', $tanggal);
    }

    // Melakukan pencarian data berdasarkan kondisi WHERE
    $reservasiData = $reservasiModel->findAll();


    $kotaModel = new KotaModel();
    $kotaData = $kotaModel->findAll();


    $kota = [];
    foreach ($kotaData as $kd) {

      $kota[$kd['kode_kota']][] = $kd;
    }


    // $jadwalData = $this->data->cari($tanggal, $asal, $tujuan);
    // $data['tanggal'] = $tanggal;
    // $data['jadwalData'] = $jadwalData;
    return view('jadwal/daftar_jadwal/update_jadwal', ['reservasi' => $reservasiData, 'kota' => $kota]);
  }

  public function update_jadwal($id)
  {
    $id_reservasi = $this->request->getVar('id_reservasi');

    // $id_jadwal1 = $this->request->getVar('id_jadwal1');
    $jamHours = $this->request->getVar('jam_hours');
    $jamMinutes = $this->request->getVar('jam_minutes');
    $harga = $this->request->getVar('harga');
    $status = $this->request->getVar('status');

    $reservasiModel = new ReservasiModel();


    $data = [
      // 'dari_tgl' => $this->request->getVar('dari_tgl'),
      // 'sampai_tgl' => $this->request->getVar('sampai_tgl'),


      'harga_tiket' => $harga,
      'jam' => $jamHours . ':' . $jamMinutes . ':00',
      'status' => $status
    ];

    // $data = [
    //   // 'jam' => 
    //   // 'id_jadwal1' => $id_jadwal1,
    //   'harga' => 
    //   'status' =>  $status,

    // ];


    $reservasiModel->where('id_reservasi', $id)->set($data)->update();

    if ($reservasiModel->affectedRows() > 0) {

      // Redirect ke halaman yang diinginkan setelah berhasil diupdate
      // Ambil data yang telah diupdate
      $dataTerupdate = $reservasiModel->find($id);


      return redirect()->back()->with('success', 'Data berhasil diupdate');
    } else {


      // Redirect ke halaman yang diinginkan jika tidak ada perubahan atau operasi update gagal
      return redirect()->back()->with('error', 'Tidak ada perubahan atau operasi update gagal');
    }
  }
}
