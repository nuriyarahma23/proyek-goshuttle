<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sopir extends Migration
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
            'nama_sopir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sopir');
    }

    public function down()
    {
        $this->forge->dropTable('sopir');
    }
}
