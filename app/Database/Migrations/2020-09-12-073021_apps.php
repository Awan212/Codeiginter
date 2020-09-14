<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class Apps extends Migration
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
			'app_type' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
				'null'       => false
			],
			'app_category' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
				'null'       => false
			],
			'app_name' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
				'null'       => false
			],
			'app_url' => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
				'null'       => false
			],
			'app_icon' => [
				'type'       => 'VARCHAR',
				'constraint' => 150,
				'null'       => false
			],
			'app_description' => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
				'null'       => false
			],
			'app_detail' => [
				'type'       => 'VARCHAR',
				'constraint' => 300,
				'null'       => false
			],
			'app_thumbnails' => [
				'type'       => 'VARCHAR',
				'constraint' => 600,
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
		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('app_name');
		$this->forge->createTable('apps', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//

		$this->forge->dropTable('apps', true);
	}
}
