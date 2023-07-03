<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSectionTwoDetail extends Migration
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
					'title'       => [
							'type'       => 'text',
					],
					'description' => [
							'type' => 'text',
					],
					'button_text' => [
						'type' => 'text',
						'constraint' => '100',
					],
					'image' => [
							'type' => 'text',
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
			
			$this->forge->createTable('section_two_detail');
	}

	public function down()
	{
		//
	}
}
