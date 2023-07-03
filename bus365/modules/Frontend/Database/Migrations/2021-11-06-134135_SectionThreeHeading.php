<?php

namespace Modules\Frontend\Database\Migrations;

use CodeIgniter\Database\Migration;

class SectionThreeHeading extends Migration
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
			
			'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
			  ],

              'sub_title' => [
				'type'           => 'VARCHAR',
                'constraint'     => '100',
			  ],

			
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at' => [
				'type' => 'datetime',
				'null' => true
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('section_three_heading');
	}

	public function down()
	{
		//
	}
}
