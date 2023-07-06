<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
       // Jalankan seeder SopirSeeder
       $this->call('App\Database\Seeds\SopirSeeder');
       $this->call('App\Database\Seeds\MobilSeeder');
       // Jalankan seeder SopirSeeder
       $this->call('App\Database\Seeds\ReservasiSeeder');
      
    }
}
