<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuBesarModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use DateTime;

class BukuBesarController extends BaseController
{
  protected $data; // Definisikan properti $data sehingga dapat digunakan di seluruh metode kelas tersebut

  public function __construct()
  {
    $this->data = new BukuBesarModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Buku Besar',
      'tampildata' => $this->data->getAll(),
    ];

    return view('bukubesar/index', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'Halaman Tambah Buku Besar',
    ];

    return view('bukubesar/index', $data);
  }

  public function proses_tambah()
  {
    $rules = [
      'tanggal' => [
        'label' => "Tanggal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'kategori' => [
        'label' => "Kategori",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'tipe' => [
        'label' => "Tipe",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'keterangan' => [
        'label' => "Keterangan",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
      'nominal' => [
        'label' => "Nominal",
        'rules' => "required",
        'errors' => [
          'required' => "{field} harus diisi"
        ]
      ],
    ];

    if ($this->validate($rules)) {
      $data = [
        'tanggal' => $this->request->getVar('tanggal'),
        'kategori' => $this->request->getVar('kategori'),
        'keterangan' => $this->request->getVar('keterangan'),
        'tipe' => $this->request->getVar('tipe'),
        'nominal' => $this->request->getVar('nominal'),
      ];

      session()->setFlashdata('status', 'Data Buku Besar berhasil ditambahkan!');

      $this->data->insert($data);
      return redirect()
        ->to(base_url('bukubesar'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Data berhasil ditambah');
    } else {
      $data = [
        'title' => 'Halaman Tambah Buku Besar',
        'tampildata' => $this->data->getAll(),
      ];

      return view('bukubesar/index', $data);
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Halaman Edit Data Buku Besar',
      'tampildata' => $this->data->cekDataBukuBesar($id),
    ];

    return view('bukubesar/index', $data);
  }

  public function proses_edit()
  {
    $loadmodel = $this->request->getVar('id');
    $data = [
      'tanggal' => $this->request->getVar('tanggal'),
      'kategori' => $this->request->getVar('kategori'),
      'keterangan' => $this->request->getVar('keterangan'),
      'tipe' => $this->request->getVar('tipe'),
      'nominal' => $this->request->getVar('nominal'),
    ];
    session()->setFlashdata('status', 'Data Buku Besar berhasil diupdate!');
    $this->data->update($loadmodel, $data);
    return redirect()
      ->to(base_url('bukubesar'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil diupdate');
  }

  public function hapus($id)
  {
    $where = [
      'id' => $id
    ];
    $this->data->delete($id);
    session()->setFlashdata('status', 'Data Buku Besar berhasil dihapus!');
    return redirect()
      ->to(base_url('bukubesar'))
      ->with('status_icon', 'success')
      ->with('status_text', 'Data berhasil dihapus');
  }
}
