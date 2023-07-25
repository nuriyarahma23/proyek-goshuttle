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
            
            'point_keberangkatan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tujuan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jam' => [
                'type' => 'TIME'
            ],
            'harga_tiket' => [
                'type' => 'DECIMAL(10,2)',
            ],
            'tanggal_reservasi' => [
                'type' => 'DATE',
                'null' => false

            ],
            'jml_kursi' => [
                'type' => 'INT',
                'constraint' => 5,
                "default" => 8
            ],
            'jenis_reservasi' => [
                'type' => "ENUM('single', 'multi')",
                'default' => 'single'
            ],
            'id_reservasi_pasangan'    => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true
            ],
            
            'status' => [
                'type' => "ENUM('available', 'departed', 'arrived', 'delay', 'closed')",
                'null' => false,
                'default' => 'available'
            ],
            'id_sopir' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true,
                
            ],
            'id_mobil' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true
               
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
