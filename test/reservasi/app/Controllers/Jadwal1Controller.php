<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal1Model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Jadwal1Controller extends BaseController
{
  protected $data;

  public function __construct()
  {
    $this->data = new Jadwal1Model();
  }

  public function buatjadwal()
  {
    $data = [
      'title' => 'Halaman Tambah Jadwal Multiroute',
    ];

    return view('jadwal/buatjadwal', $data);
  }

  public function tambah()
  {
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
        'rules' => "required|numeric",
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

      session()->setFlashdata('success', 'Jadwal berhasil ditambah!');

      $this->data->insert($data);
      return redirect()
        ->to(base_url('jadwalmultiroute'))
        ->with('status_icon', 'success')
        ->with('status_text', 'Jadwal berhasil ditambah');
    } else {
      $data = [
        'title' => 'Halaman Tambah Jadwal',
      ];
    }

    return view('jadwal/buatjadwal', $data);
  }

  public function kelola_jadwal()
  {
    $data = [
      'title' => 'Kelola Jadwal',
    ];

    return view('jadwal/kelola_jadwal', $data);
  }
}
