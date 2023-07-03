<?php

namespace Modules\User\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			
			'login_email' => [
				'type'           => 'TINYTEXT',
               'unsigned'       => true,
			],

			'login_mobile' => [
				'type'           => 'INT',
                'unsigned'       => true,
			],

			'password' => [
				'type'           => 'TEXT',
            ],
			'recovery_code' => [
				'type'           => 'TEXT',
				'null' => true
            ],

			'slug' => [
				'type'           => 'TEXT',
				'unsigned'       => true,
            ],

			'last_login' => [
				'type'           => 'TINYTEXT',
				'null' => true
            ],

			'ip' => [
				'type'           => 'datetime',
				'null' => true
			],

			'role_id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
            ],

		    'status' => [
				'type'           => 'TINYTEXT',
				
            ],

			
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at' => [
				'type' => 'datetime',
				'null' => true
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->addKey('login_email',true);
	$this->forge->addKey('login_mobile',true);
	$this->forge->addKey('slug',true);
	$this->forge->addForeignKey('role_id','roles','id');
	$this->forge->createTable('users');
	}

	public function down()
	{
		//
	}
}
