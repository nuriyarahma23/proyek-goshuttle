<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\PaketModel;
use App\Models\PembayaranModel;

class AuthController extends BaseController
{
  protected $auth;
  protected $session;
  protected $encryption;

  public function __construct()
  {
    helper('text');
    $this->auth = new AuthModel();
    $this->session = \Config\Services::session();
    $this->session->start();
    \Config\Services::validation();
  }

  public function index()
  {
    return view('login');
  }

  public function proses_login()
  {
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $validasi_username = $this->auth->query_validasi_username($username);

    if ($validasi_username->getNumRows() > 0) {
      $validate_ps = $this->auth->where('username', $username)->first();
      if ($validate_ps && password_verify($password, $validate_ps->password)) {
        $x = $validasi_username->getRowArray();
        $id = $x['id'];
        $username = $x['username'];
        $role = $x['role'];
        $password = $x['password'];
        $no_telepon = $x['no_telepon'];
        $email = $x['email'];
        $this->session->set('logged_in', TRUE);
        $this->session->set('user', $username);
        $nama = $x['nama'];
        $this->session->set('id', $id);
        $this->session->set('username', $username);
        $this->session->set('nama', $nama);
        $this->session->set('role', $role);
        $this->session->set('no_telepon', $no_telepon);
        $this->session->set('email', $email);
        $this->session->set('password', $password);

        // Mencari data tiket
        $pembayaranModel = new PembayaranModel();
        $settlementtiket = $pembayaranModel
          ->selectSum('harga', 'total_harga') // Calculate the sum of the 'harga' column and give it an alias 'total_harga'
          ->where('id_user', session('id'))
          ->where('status_pembayaran', 'Sudah membayar')
          ->where('tersettle IS NULL')

          ->get()
          ->getRowArray();
        $this->session->set('settlementtiket', $settlementtiket['total_harga']);

        // Mnecari data paket
        $paketModel = new PaketModel();
        $settlementpaket =  $paketModel
          ->selectSum('harga', 'total_harga') // Calculate the sum of the 'harga' column and give it an alias 'total_harga'
          ->where('id_user', session('id'))
          ->where('tersettle IS NULL')

          ->get()
          ->getRowArray();
        $this->session->set('settlementpaket', $settlementpaket['total_harga']);

        if ($role == "Admin") {
          return redirect()->to(base_url('tampil_dashboard'));
        } else if ($role == "Staff1") {
          return redirect()->to(base_url('tampil_dashboard'));
        } else if ($role == "Staff2") {
          return redirect()->to(base_url('tampil_dashboard'));
        }
      } else {
        session()->setFlashdata('status', 'Gagal Login');
        return redirect()
          ->to(base_url('login'))
          ->with('status_icon', 'error')
          ->with('status_text', 'ID atau Password yang Anda masukan salah');
      }
    } else {
      session()->setFlashdata('status', 'Gagal Login');
      return redirect()
        ->to(base_url('login'))
        ->with('status_icon', 'error')
        ->with('status_text', 'ID atau Password yang Anda masukan salah');
    }
  }

  public function logout()
  {
    session_destroy();
    return redirect()->to(base_url('login'));
  }
}
