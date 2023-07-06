<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reservasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_reservasi'    => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'asal_kota' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tujuan_kota' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'waktu' => [
                'type' => 'DATETIME',
            ],
            'harga' => [
                'type' => 'DECIMAL(10,2)',
            ],
            'tanggal_reservasi' => [
                'type' => 'DATE',
                'null' => false

            ],
            'id_sopir' => [
                'type' => 'int',
                'unsigned' => true,
                
            ],
            'id_mobil' => [
                'type' => 'int',
                'unsigned' => true,
               
            ]
        ]);
        $this->forge->addPrimaryKey('id_reservasi');
        $this->forge->addForeignKey('id_sopir', 'sopir', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_mobil', 'mobil', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('reservasi');
        // Menambahkan data mock

    }

    public function down()
    {
        $this->forge->dropTable('reservasi');
    }
}
