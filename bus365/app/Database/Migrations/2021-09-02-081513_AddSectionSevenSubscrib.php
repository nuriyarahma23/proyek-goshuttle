<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSectionSevenSubscrib extends Migration
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
					'sub_title' => [
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
			
			$this->forge->createTable('section_seven_subscrib');
	}

	public function down()
	{
		//
	}
}
