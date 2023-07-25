<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kursipenumpang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kursi'      => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_reservasi'  => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'id_pelanggan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true, 
                'null' => true

            ],
            'tipe_reservasi' => [
                'type' => 'ENUM',
                'constraint' => ['Biru', 'Putih'],
                'null' => true
            ],
            'id_kursi_parent' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => true
            ],

     

            'nomor_kursi'   => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'nomor_telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
                'null' => true
            ],
            'nama'          => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],

            'note' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 20,

            ],
            'id_diskon' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            'checkin' => [
                'type' => 'ENUM',
                'constraint' => ['Sudah Datang', 'Belum Datang'],
                'default' => 'Belum Datang',
            ]
        ]);
        $this->forge->addPrimaryKey('id_kursi');
        $this->forge->addForeignKey('id_reservasi', 'reservasi', 'id_reservasi', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_diskon', 'diskon', 'id_diskon', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_pelanggan', 'pelanggan', 'id_pelanggan', 'CASCADE', 'CASCADE');


        $this->forge->createTable('kursi_penumpang');
    }

    public function down()
    {
        $this->forge->dropTable('kursi_penumpang');
    }
}
