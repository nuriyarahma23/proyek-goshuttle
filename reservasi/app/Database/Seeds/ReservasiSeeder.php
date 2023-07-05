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
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-02 10:00:00',
                'harga' => 200000,
                'tanggal_reservasi' => '2023-07-02',
            ],
            // Tambahkan data reservasi lainnya di sini
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 09:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 10:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            // Tambahkan data reservasi lainnya hingga 10 data pada tanggal 4 Juli 2023
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 11:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 12:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 13:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 14:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 15:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
            [
                'asal_kota' => 'CHM',
                'tujuan_kota' => 'CBB',
                'waktu' => '2023-07-04 16:00:00',
                'harga' => 150000,
                'tanggal_reservasi' => '2023-07-04',
            ],
        ];

        $reservasiModel = new ReservasiModel();

        foreach ($reservasiData as $data) {
            $reservasiModel->insert($data);
        }
         // Jalankan seeder SopirSeeder
         $this->call('App\Database\Seeds\SopirSeeder');
         $this->call('App\Database\Seeds\MobilSeeder');

    }
}
