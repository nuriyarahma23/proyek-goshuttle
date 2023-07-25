<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settlement extends Migration
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
            'id_user' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'total' => [
                'type' => 'DOUBLE',
                'constraint' => '14,2', // Specify the total number of digits and decimal places
            ],
            'status' => [
                'type' => 'TEXT',
                'null' => false, // Set the column to NOT NULL
            ],
            'catatan' => [
                'type' => 'TEXT',
                'null' => false, // Set the column to NOT NULL
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settlement');
    }

    public function down()
    {
        $this->forge->dropTable('settlement');

    }
}
