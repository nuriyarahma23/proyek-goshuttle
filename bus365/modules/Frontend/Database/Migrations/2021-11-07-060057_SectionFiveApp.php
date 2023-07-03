<?php

namespace Modules\Frontend\Database\Migrations;

use CodeIgniter\Database\Migration;

class SectionFiveApp extends Migration
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

			  'image' => [
                'type' => 'text',
				],

			  'button_one_status' => [
                'type'           => 'INT',
				'constraint'     => 11,
				],

			  'button_two_status' => [
                'type'           => 'INT',
				'constraint'     => 11,
				],

			  'button_one_link' => [
                'type'           => 'TEXT',
				],

			  'button_two_link' => [
                'type'           => 'TEXT',
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
