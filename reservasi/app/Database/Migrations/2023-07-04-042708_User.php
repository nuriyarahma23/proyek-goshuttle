<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'           => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password'        => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_lengkap'    => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            
        ]);
        $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('kursi_travel_id', 'kursi_penumpang', 'id_reservasi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('user');
        // Menambahkan data mock
        $data = [
            [
                'email'           => 'john@example.com',
                'password'        => password_hash('password123', PASSWORD_DEFAULT),
                'nama_lengkap'    => 'John Doe',
       
            ],
            [
                'email'           => 'jane@example.com',
                'password'        => password_hash('password456', PASSWORD_DEFAULT),
                'nama_lengkap'    => 'Jane Smith',
                
            ],
        ];

        $this->db->table('user')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
