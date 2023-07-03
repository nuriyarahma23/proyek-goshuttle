<?php

namespace Modules\Fleet\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vehicalimg extends Migration
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
			

			'vehicle_id' => [
				'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
                
			],
			'img_path' => [
				'type'           => 'text',
                
			],

			
			
			
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at' => [
				'type' => 'datetime',
				'null' => true
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->addForeignKey('vehicle_id','vehicles','id');
	$this->forge->createTable('vehicalimages');
	}

	public function down()
	{
		//
	}
}
