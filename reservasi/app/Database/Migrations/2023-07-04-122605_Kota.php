<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kota' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kota' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'kode_kota' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addKey('id_kota', true);
        $this->forge->createTable('kota');

        // Insert mock data
        $data = [
            [
                'nama_kota' => 'CIHAMPELAS',
                'kode_kota' => 'CHM',
            ],
            [
                'nama_kota' => 'BEKASI',
                'kode_kota' => 'BKS',
            ],
            [
                'nama_kota' => 'CIBUBUR',
                'kode_kota' => 'CBB',
            ],
            [
                'nama_kota' => 'DEPOK',
                'kode_kota' => 'DPK',
            ],
            [
                'nama_kota' => 'JATIWARINGIN',
                'kode_kota' => 'JTR',
            ],
        ];

        $this->db->table('kota')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('kota');
    }
}
