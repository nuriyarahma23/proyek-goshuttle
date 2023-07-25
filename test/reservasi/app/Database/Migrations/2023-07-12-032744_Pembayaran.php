<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_kursi' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'unique' => true,
            ],
            'harga' => [
                'type' => 'FLOAT',
                'null' => true,
            ],

            'metode_pembayaran' => [
                'type' => 'ENUM',
                'constraint' => ['bayarTempat', 'qris', 'bankbca'],
                'null' => true,

            ],
            'status_pembayaran' => [
                'type' => 'ENUM',
                'constraint' => ['Sudah membayar', 'Belum membayar', 'Konfirmasi pembayaran'],
                'default' => 'Belum membayar',
            ],
            'tanggal_batas_pembayaran' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggal_pembayaran' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'tersettle' => [
                'type' => 'INT',
                'default' => null,
                'null' => true
            ],


        ]);

        $this->forge->addPrimaryKey('id_pembayaran');
        $this->forge->addForeignKey('id_kursi', 'kursi_penumpang', 'id_kursi', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
