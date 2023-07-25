<?php

namespace App\Database\Seeds;

use App\Models\ReservasiModel;
use CodeIgniter\Database\Seeder;

class ReservasiSeeder extends Seeder
{
    public function run()
    {
         
        $reservasiData = [
            [
                'point_keberangkatan' => 'CHM',
                'tujuan' => 'CBB',
                'jam' => '09:00:00',
                'harga_tiket' => 150000,
                'tanggal_reservasi' => '2023-07-01',
                'id_mobil' => 1,
                'id_sopir' => 1
            ],
            [
                'point_keberangkatan' => 'CHM',
                'tujuan' => 'CBB',
                'jam' => '10:00:00',
                'harga_tiket' => 200000,
                'tanggal_reservasi' => '2023-07-02',
                'id_mobil' => 2,
                'id_sopir' => 2
            ],
            // Tambahkan data reservasi lainnya di sini
            [
                'point_keberangkatan' => 'CHM',
                'tujuan' => 'CBB',
                'jam' => '09:00:00',
                'harga_tiket' => 150000,
                'tanggal_reservasi' => '2023-07-04',
                'id_mobil' => 3,
                'id_sopir' => 3
            ],
            [
                'point_keberangkatan' => 'CHM',
                'tujuan' => 'CBB',
                'jam' => '10:00:00',
                'harga_tiket' => 150000,
                'tanggal_reservasi' => '2023-07-18',
                'id_mobil' => 4,
                'id_sopir' => 4
            ],
            // Tambahkan data reservasi lainnya hingga 10 data pada tanggal 4 Juli 2023
            [
                'point_keberangkatan' => 'CHM',
                'tujuan' => 'CBB',
                'jam' => '11:00:00',
                'harga_tiket' => 150000,
                'tanggal_reservasi' => '2023-07-17',
                'id_mobil' => 3,
                'id_sopir' => 5
            ],
         

        ];

        $reservasiModel = new ReservasiModel();

        foreach ($reservasiData as $data) {
            $reservasiModel->insert($data);
        }
       
    }
}
