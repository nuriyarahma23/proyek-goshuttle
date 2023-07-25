<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class BerandaController extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $session = [
            'title' => 'Halaman Utama',
            'session' => $this->user->getAll(),
            'pembayaran' => $this->user->getTiket(),
        ];


        return view('index', $session);
    }
}
