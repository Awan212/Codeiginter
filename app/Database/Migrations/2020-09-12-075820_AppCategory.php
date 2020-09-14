<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class AppCategory extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 9,
				'auto_increment' => true,
			],
			'category' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
				
				'null'       => false
			],
			'category_type' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
				'null'       => false
			],
			'created_at'  => [
				'type'       => 'TIMESTAMP',
				'default' 	 => Time::now('Asia/Karachi','en_US'),
			],
			'updated_at'  => [
				'type'       => 'TIMESTAMP',
				'default' 	 => Time::now('Asia/Karachi','en_US'),
			],
		]);
		//$this->forge->addKey('id', true);
		$this->forge->addPrimaryKey('id',true);
		$this->forge->addUniqueKey('category');
		$this->forge->createTable('AppCategories', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('AppCategories', true);
	}
}
