<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'no_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'jml_reservasi' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'jml_reservasi_lunas' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['AKTIF', 'NONAKTIF'],
                'default' => 'AKTIF'
            ]
        ]);

        $this->forge->addKey('id_pelanggan', true);
        $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
