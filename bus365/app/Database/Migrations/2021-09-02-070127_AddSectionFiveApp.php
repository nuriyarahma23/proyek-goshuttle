<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSectionFiveApp extends Migration
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
					
					'image' => [
						'type' => 'text',
						
					],
					'title' => [
						'type' => 'text',
					],

					'sub_title' => [
						'type' => 'text',
					],
					'button_one_status' => [
						'type' => 'INT',
						'constraint'   => 11,
					],
					'button_one_link' => [
						'type' => 'text',
					],

					'button_two_status' => [
						'type' => 'INT',
						'constraint'   => 11,
					],
					'button_two_link' => [
						'type' => 'text',
					],
					
					
					'created_at datetime default current_timestamp',
					'updated_at datetime default current_timestamp on update current_timestamp',
					'deleted_at' => [
						'type' => 'datetime',
						'null' => true
					],
			]);
			$this->forge->addKey('id', true);
			
			$this->forge->createTable('section_five_app');
	}

	public function down()
	{
		//
	}
}
