<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSectionFourDetail extends Migration
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
					
					'description' => [
							'type' => 'text',
					],
					'image' => [
						'type' => 'text',
						'null' => true
					],

					'person_name' => [
						'type' => 'text',
						'constraint' => '100',
					],
					'person_detail' => [
						'type' => 'text',
						'constraint' => '100',
					],
					'serial' => [
						'type' => 'INT',
						'constraint'     => 11,
					],
					
					
					'created_at datetime default current_timestamp',
					'updated_at datetime default current_timestamp on update current_timestamp',
					'deleted_at' => [
						'type' => 'datetime',
						'null' => true
					],
			]);
			$this->forge->addKey('id', true);
			
			$this->forge->createTable('section_four_detail');
	}

	public function down()
	{
		//
	}
}
