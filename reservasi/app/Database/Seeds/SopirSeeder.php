<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SopirSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                
                'nama_sopir' => 'A. Djunaedi',
            ],
            [
                
                'nama_sopir' => 'Achmad Solihin',
            ],
            [
                
                'nama_sopir' => 'Agus Rahmat',
            ],
            [
                
                'nama_sopir' => 'Ahmad Saefullah',
            ],
            [
                
                'nama_sopir' => 'Alif Firmansyah',
            ],
            [
                
                'nama_sopir' => 'Anto Purwanto',
            ],
            [
                
                'nama_sopir' => 'Anwar Sadat',
            ],
            [
                
                'nama_sopir' => 'Cecep Iwan',
            ],
            [
                
                'nama_sopir' => 'Doni Sehabudin',
            ],
            [
                
                'nama_sopir' => 'Hanterli',
            ],
            [
                
                'nama_sopir' => 'Iyan Suryana',
            ],
            [
                
                'nama_sopir' => 'Riki',
            ],
            [
                
                'nama_sopir' => 'Solahudin',
            ],
            [
                
                'nama_sopir' => 'Taufik Hidayat',
            ],
            [
                
                'nama_sopir' => 'Wawan Kurniawan',
            ],
            [
                
                'nama_sopir' => 'Wawan Setiawan',
            ],
        ];

        $this->db->table('sopir')->insertBatch($data);
    }
}
