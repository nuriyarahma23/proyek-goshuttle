<?php

namespace Modules\Paymethod\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stripe extends Migration
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
			
			'test_p_kye' => [
				'type'           => 'text',
                
			],
			'test_s_kye' => [
				'type'           => 'text',
                
			],

			'live_p_kye' => [
				'type'           => 'text',
                
			],
			'live_s_kye' => [
				'type'           => 'text',
                
			],

			'environment' => [
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
	
	$this->forge->createTable('stripes');
	}

	public function down()
	{
		//
	}
}
