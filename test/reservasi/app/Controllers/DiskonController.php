<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class DiskonController extends BaseController
{
  protected $data;

  public function __construct()
  {
    $this->data = new DiskonModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Diskon',
      'tampildata' => $this->data->getAll(),
    ];

    return view('master/diskon/index', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'Halaman Tambah Data Diskon',
    ];

    return view('master/diskon/index', $data);
  }

  public function proses_tambah()
  {
    $rules = [
      'kode_diskon' => [
        'label' => "Kode Diskon",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'nama_diskon' => [
        'label' => "Nama Diskon",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'type' => [
        'label' => "Type",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'besaran' => [
        'label' => "Besaran",
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
        'kode_diskon' => $this->request->getVar('kode_diskon'),
        'nama_diskon' => $this->request->getVar('nama_diskon'),
        'type' => $this->request->getVar('type'),
        'besaran' => $this->request->getVar('besaran'),
        'status' => $this->request->getVar('status'),
      ];

      session()->setFlashdata('status', 'Data diskon berhasil ditambahkan!');

      $this->data->insert($data);
      return redirect()
        ->to(base_url('tampildata-diskon'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Data berhasil ditambah');
    } else {
      $data = [
        'title' => 'Halaman Tambah Data Diskon',
      ];

      return view('master/diskon/index', $data);
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Halaman Edit Data Diskon',
      'tampildata' => $this->data->cekDataDiskon($id),
    ];

    return view('master/diskon/index', $data);
  }

  public function proses_edit()
  {
    $loadmodel = $this->request->getVar('id_diskon');
    $data = [
      'kode_diskon' => $this->request->getVar('kode_diskon'),
      'nama_diskon' => $this->request->getVar('nama_diskon'),
      'type' => $this->request->getVar('type'),
      'besaran' => $this->request->getVar('besaran'),
      'status' => $this->request->getVar('status'),
    ];
    session()->setFlashdata('status', 'Data diskon berhasil diupdate!');
    $this->data->update($loadmodel, $data);
    return redirect()
      ->to(base_url('tampildata-diskon'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil diupdate');
  }

  public function hapus($id)
  {
    $where = [
      'id_diskon' => $id
    ];
    $this->data->delete($id);
    session()->setFlashdata('status', 'Data diskon berhasil dihapus!');
    return redirect()
      ->to(base_url('tampildata-diskon'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil dihapus');
  }
}
