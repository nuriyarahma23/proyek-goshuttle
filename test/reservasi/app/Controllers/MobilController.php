<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MobilModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MobilController extends BaseController
{
  protected $data; // Definisikan properti $data sehingga dapat digunakan di seluruh metode kelas tersebut

  public function __construct()
  {
    $this->data = new MobilModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Mobil',
      'tampildata' => $this->data->getAll(),
    ];

    return view('master/mobil/index', $data);
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
