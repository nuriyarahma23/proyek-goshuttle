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
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-01 09:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-01',
                'id_mobil' => 1,
                'id_sopir' => 1
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-02 10:00:00',
                'harga' => 200000,
                'tanggal_reservasi' => '2023-07-02',
                'id_mobil' => 1,
                'id_sopir' => 2
            ],
            // Tambahkan data reservasi lainnya di sini
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 09:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
                'id_mobil' => 1,
                'id_sopir' => 3
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 10:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
                'id_mobil' => 1,
                'id_sopir' => 4
            ],
            // Tambahkan data reservasi lainnya hingga 10 data pada tanggal 4 Juli 2023
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 11:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
                'id_mobil' => 1,
                'id_sopir' => 5
            ],
         

        ];

        $reservasiModel = new ReservasiModel();

        foreach ($reservasiData as $data) {
            $reservasiModel->insert($data);
        }
       
    }
}
