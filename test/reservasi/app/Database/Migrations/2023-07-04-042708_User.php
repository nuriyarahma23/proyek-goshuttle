<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'no_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'point' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');

        $data = [
            [
                'id' => 1,
                'nama' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Admin',
                'no_telepon' => '08123456789',
                'point' => 'DPK',
            ],
            [
                'id' => 2,
                'nama' => 'Staff 1',
                'username' => 'staff1',
                'email' => 'staff1@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff1',
                'no_telepon' => '08123456799',
                'point' => '',
            ],
            [
                'id' => 3,
                'nama' => 'Staff 2',
                'username' => 'staff2',
                'email' => 'staff2@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '08234567890',
                'point' => '',
            ],
            [
                'id' => 4,
                'nama' => 'Alif Fitriyono',
                'username' => 'alif@goshutlle.com',
                'email' => 'alif@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff1',
                'no_telepon' => '081215893298',
                'point' => '',
            ],
            [
                'id' => 5,
                'nama' => 'Anggi Amelia',
                'username' => 'anggi@goshuttle.com',
                'email' => 'anggi@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081287665432',
                'point' => '',
            ],
            [
                'id' => 6,
                'nama' => 'Annisa Fitriani',
                'username' => 'annisa@goshuttle.com',
                'email' => 'annisa@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '085443216776',
                'point' => '',
            ],
            [
                'id' => 7,
                'nama' => 'Nurjaman Ginanjar',
                'username' => 'nurjaman@goshuttle.com',
                'email' => 'nurjaman@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '085443215889',
                'point' => '',
            ],
            [
                'id' => 8,
                'nama' => 'Sarah Alifania',
                'username' => 'sarah@goshuttle.com',
                'email' => 'sarah@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '085998765443',
                'point' => '',
            ],
            [
                'id' => 9,
                'nama' => 'Chyntia Devanty',
                'username' => 'chyntia@goshuttle.com',
                'email' => 'chyntia@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081234567876',
                'point' => '',
            ],
            [
                'id' => 10,
                'nama' => 'Dimas Adjie Pramudya',
                'username' => 'dimas@goshutte.com',
                'email' => 'dimas@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081233654233',
                'point' => '',
            ],
            [
                'id' => 11,
                'nama' => 'Hamdi Fadilah',
                'username' => 'hamdi@goshuttle.com',
                'email' => 'hamdi@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '08655432176',
                'point' => '',
            ],
            [
                'id' => 12,
                'nama' => 'Rafli Abdurrahman',
                'username' => 'rafli@goshuttle.com',
                'email' => 'rafli@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081244876554',
                'point' => '',
            ],
            [
                'id' => 13,
                'nama' => 'Rosda Novia',
                'username' => 'rosda@goshuttle.com',
                'email' => 'rosda@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081226765443',
                'point' => '',
            ],
            [
                'id' => 14,
                'nama' => 'Muhammad Qifriyan',
                'username' => 'qifriyan@goshuttle.com',
                'email' => 'qifriyan@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081266578665',
                'point' => '',
            ],
            [
                'id' => 15,
                'nama' => 'Hamzah',
                'username' => 'hamzah@goshuttle.com',
                'email' => 'hamzah@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081665876965',
                'point' => '',
            ],
            [
                'id' => 16,
                'nama' => 'Tina Rahayu',
                'username' => 'tina@goshuttle.com',
                'email' => 'tina@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '085776543221',
                'point' => '',
            ],
            [
                'id' => 17,
                'nama' => 'Cut Novianti',
                'username' => 'novia@goshuttle.com',
                'email' => 'novia@gmail.com',
                'password' => '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq',
                'role' => 'Staff2',
                'no_telepon' => '081216776543',
                'point' => '',
            ],
            [
                'id' => 18,
                'nama' => 'Erika',
                'username' => 'erika@goshuttle.com',
                'email' => 'erika@gmail.com',
                'password' => '$2y$10$exYk9wMZ6P4FtnLR6jpSb.4mc1wVFdsO30hAP8VRNrhO4z6IjlDte',
                'role' => 'Staff2',
                'no_telepon' => '081246776876',
                'point' => 'CHM',
            ],
        ];


        $this->db->table('user')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
