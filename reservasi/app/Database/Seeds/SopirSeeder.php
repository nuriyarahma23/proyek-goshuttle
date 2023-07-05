<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SopirSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 18,
                'nama_sopir' => 'A. Djunaedi',
            ],
            [
                'id' => 9,
                'nama_sopir' => 'Achmad Solihin',
            ],
            [
                'id' => 21,
                'nama_sopir' => 'Agus Rahmat',
            ],
            [
                'id' => 8,
                'nama_sopir' => 'Ahmad Saefullah',
            ],
            [
                'id' => 20,
                'nama_sopir' => 'Alif Firmansyah',
            ],
            [
                'id' => 17,
                'nama_sopir' => 'Anto Purwanto',
            ],
            [
                'id' => 15,
                'nama_sopir' => 'Anwar Sadat',
            ],
            [
                'id' => 3,
                'nama_sopir' => 'Cecep Iwan',
            ],
            [
                'id' => 19,
                'nama_sopir' => 'Doni Sehabudin',
            ],
            [
                'id' => 23,
                'nama_sopir' => 'Hanterli',
            ],
            [
                'id' => 11,
                'nama_sopir' => 'Iyan Suryana',
            ],
            [
                'id' => 16,
                'nama_sopir' => 'Riki',
            ],
            [
                'id' => 24,
                'nama_sopir' => 'Solahudin',
            ],
            [
                'id' => 4,
                'nama_sopir' => 'Taufik Hidayat',
            ],
            [
                'id' => 10,
                'nama_sopir' => 'Wawan Kurniawan',
            ],
            [
                'id' => 2,
                'nama_sopir' => 'Wawan Setiawan',
            ],
        ];

        $this->db->table('sopir')->insertBatch($data);
    }
}
