<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bukubesar extends Migration
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
            'tanggal' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'tipe' => [
                'type' => 'ENUM',
                'constraint' => ['Masuk', 'Keluar'], // Use an array for possible values
                'default' => 'Masuk', // Set a default value
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nominal' => [
                'type' => 'DOUBLE',
                'constraint' => '14,2', // Specify the total number of digits and decimal places
            ],
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bukubesar');
    }

    public function down()
    {
        $this->forge->dropTable('bukubesar');
    }
}
