<?php

namespace App\Controllers;
use CodeIgniter\Controller\RedirectTrait;
class Home extends BaseController
{
    
    public function index()
    {
       
        return view('home');
    }
}
