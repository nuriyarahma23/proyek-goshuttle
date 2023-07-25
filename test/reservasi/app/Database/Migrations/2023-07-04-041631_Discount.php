<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Discount extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_diskon' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'kode_diskon' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'nama_diskon' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'type' => [
                'type' => 'ENUM',
                'constraint' => ['percentage', 'amount'],
                'default' => 'percentage'
            ],
            'besaran' => [
                'type' => 'TEXT'
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['AKTIF', 'NONAKTIF'],
                'default' => 'NONAKTIF'
            ]
        ]);

        $this->forge->addKey('id_diskon', true);
        $this->forge->createTable('diskon');

        // Insert mock data
        $data = [
            [
                'kode_diskon' => 'UMUM',
                'nama_diskon' => 'UMUM',
                'type' => 'percentage',
                'besaran' => '0',
                'status' => 'AKTIF'
            ],
            [
                'kode_diskon' => 'DISC001',
                'nama_diskon' => 'Diskon 10%',
                'type' => 'percentage',
                'besaran' => '10',
                'status' => 'AKTIF'
            ],
            [
                'kode_diskon' => 'DISC002',
                'nama_diskon' => 'Diskon 20%',
                'type' => 'percentage',
                'besaran' => '20',
                'status' => 'AKTIF'
            ],
            [
                'kode_diskon' => 'DISC003',
                'nama_diskon' => 'Diskon 30%',
                'type' => 'percentage',
                'besaran' => '30',
                'status' => 'NONAKTIF'
            ]
        ];

        $this->db->table('diskon')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('diskon');
    }
}
