<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class Blog extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 9,
				'auto_increment' => true,
			],
			'title' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
				'null'       => false
			],
			'body' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
				'null'       => false
			],
			'author' => [
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
		$this->forge->addKey('id', true);
		$this->forge->createTable('blogs', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//

		$this->forge->dropTable('blogs', true);
	}
}
