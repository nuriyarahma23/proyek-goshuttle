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
            'nomor_kursi'   => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'nomor_telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
            ],
            'nama'          => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'note' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 20,

            ],
        ]);
        $this->forge->addPrimaryKey('id_kursi');
        $this->forge->addForeignKey('id_reservasi', 'reservasi', 'id_reservasi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('kursi_penumpang');
    }

    public function down()
    {
        $this->forge->dropTable('kursi_penumpang');
    }
}
