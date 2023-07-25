<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogReservasi extends Migration
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
            'id_reservasi' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'tipe_aktivitas' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'keterangan_aktivitas' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'nama_terlibat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'id_user' => [
                'type' => 'INT', // Assuming the user ID is an integer.
                'unsigned' => true, // Assuming the user ID is unsigned.
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_reservasi', 'reservasi', 'id_reservasi', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'user', 'id', 'CASCADE', 'CASCADE'); // Add the foreign key to the 'user' table.

        $this->forge->createTable('logreservasi');

    }

    public function down()
    {
        $this->forge->dropTable('logreservasi');
    }
}
