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
			
			'user_id' => [
				'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
            ],

			'first_name' => [
				'type'           => 'TINYTEXT',
            ],
			'last_name' => [
				'type'           => 'TINYTEXT',
            ],


			'id_number' => [
				'type'           => 'TEXT',
			 ],

			'id_type' => [
				'type'           => 'TINYTEXT',
			],

			'image' => [
				'type'           => 'TINYTEXT',
				'null' => true
            ],

			'address' => [
				'type'           => 'TINYTEXT',
			 ],

			'country_id' => [
				'type'        => 'TINYTEXT',
				'null' => true
            ],

			'city' => [
				'type'        => 'TEXT',
				'null' => true
            ],

			'zip_code' => [
				'type'           => 'VARCHAR',
                'constraint'     => '100',
				'null' => true
			],
		
			
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at' => [
				'type' => 'datetime',
				'null' => true
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->addForeignKey('user_id','users','id');
	$this->forge->createTable('user_details');
	}

	public function down()
	{
		//
	}
}
