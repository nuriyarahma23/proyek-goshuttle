<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PelangganController extends BaseController
{
  protected $data; // Definisikan properti $data sehingga dapat digunakan di seluruh metode kelas tersebut

  public function __construct()
  {
    $this->data = new PelangganModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Pelanggan',
      'tampildata' => $this->data->getAll(),
    ];

    return view('master/pelanggan/index', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'Halaman Tambah Data Pelanggan',
    ];

    return view('master/pelanggan/index', $data);
  }

  public function proses_tambah()
  {
    $rules = [
      'no_telepon' => [
        'label' => "Nomor Telepon",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'nama' => [
        'label' => "Nama Pelanggan",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'alamat' => [
        'label' => "Alamat",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'jml_reservasi' => [
        'label' => "Jumlah Reservasi",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'jml_reservasi_lunas' => [
        'label' => "Jumlah Reservasi Lunas",
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
        'no_telepon' => $this->request->getVar('no_telepon'),
        'nama' => $this->request->getVar('nama'),
        'alamat' => $this->request->getVar('alamat'),
        'jml_reservasi' => $this->request->getVar('jml_reservasi'),
        'jml_reservasi_lunas' => $this->request->getVar('jml_reservasi_lunas'),
        'status' => $this->request->getVar('status')
      ];

      session()->setFlashdata('status', 'Data pelanggan berhasil ditambahkan!');

      $this->data->insert($data);
      return redirect()
        ->to(base_url('tampildata-pelanggan'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Data berhasil ditambah');
    } else {
      $data = [
        'title' => 'Halaman Tambah Data Pelanggan',
      ];

      return view('master/pelanggan/index', $data);
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Halaman Edit Data Pelanggan',
      'tampildata' => $this->data->cekDataPelanggan($id),
    ];

    return view('master/pelanggan/index', $data);
  }

  public function proses_edit()
  {
    $loadmodel = $this->request->getVar('id_pelanggan');
    $data = [
      'no_telepon' => $this->request->getPost('no_telepon'),
      'nama' => $this->request->getPost('nama'),
      'alamat' => $this->request->getPost('alamat'),
      'jml_reservasi' => $this->request->getPost('jml_reservasi'),
      'jml_reservasi_lunas' => $this->request->getPost('jml_reservasi_lunas'),
      'status' => $this->request->getPost('status')
    ];
    session()->setFlashdata('status', 'Data pelanggan berhasil diupdate!');
    $this->data->update($loadmodel, $data);
    return redirect()
      ->to(base_url('tampildata-pelanggan'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil diupdate');
  }

  public function hapus($id)
  {
    $where = [
      'id_pelanggan' => $id
    ];
    $this->data->delete($id);
    session()->setFlashdata('status', 'Data pelanggan berhasil dihapus!');
    return redirect()
      ->to(base_url('tampildata-pelanggan'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil dihapus');
  }



  public function getAllPelanggan()
  {
    $pelangganModel = new PelangganModel();
    $data = $pelangganModel->findAll();

    // Return the pelanggan data as JSON response
    return $this->response->setJSON($data);
   
  }
}
