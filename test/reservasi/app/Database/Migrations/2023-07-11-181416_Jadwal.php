<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jadwal' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'dari_tgl' => [
                'type' => 'DATE'
            ],
            'sampai_tgl' => [
                'type' => 'DATE'
            ],
            'tujuan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'jml_kursi' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'harga_tiket' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'unsigned' => true
            ],
            'point_keberangkatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'jam' => [
                'type' => 'TIME'
            ]
        ]);

        $this->forge->addKey('id_jadwal', true);
        $this->forge->createTable('jadwal');

        // Insert mock data
        $data = [
            [
                'dari_tgl' => '2023-07-12',
                'sampai_tgl' => '2023-07-14',
                'tujuan' => 'Surabaya',
                'jml_kursi' => 100,
                'harga_tiket' => '150000.00',
                'point_keberangkatan' => 'Stasiun A',
                'jam' => '08:00:00'
            ],
            [
                'dari_tgl' => '2023-07-13',
                'sampai_tgl' => '2023-07-15',
                'tujuan' => 'Jakarta',
                'jml_kursi' => 80,
                'harga_tiket' => '200000.00',
                'point_keberangkatan' => 'Stasiun B',
                'jam' => '10:00:00'
            ],
            [
                'dari_tgl' => '2023-07-14',
                'sampai_tgl' => '2023-07-16',
                'tujuan' => 'Bandung',
                'jml_kursi' => 120,
                'harga_tiket' => '180000.00',
                'point_keberangkatan' => 'Stasiun C',
                'jam' => '12:00:00'
            ]
        ];

        $this->db->table('jadwal')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
