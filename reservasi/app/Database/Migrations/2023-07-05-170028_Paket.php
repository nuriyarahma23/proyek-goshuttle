<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_reservasi'  => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'pengirim' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nomor_pengirim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'penerima' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nomor_penerima' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'berat' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'jumlah_koli' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'isi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'harga' => [
                'type' => 'TEXT',

            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_reservasi', 'reservasi', 'id_reservasi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('paket');
    }

    public function down()
    {
        $this->forge->dropTable('paket');
    }
}
