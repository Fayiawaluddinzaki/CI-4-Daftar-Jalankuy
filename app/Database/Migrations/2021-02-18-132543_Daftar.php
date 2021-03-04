<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftar extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'	=>[
				'type'           => 'INT',
				'constraint'     => 3,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'address'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'number' => [
				'type'           => 'SMALLINT',
				'null'           => FALSE,
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'	 => '50',
			],
			'destination' => [
				'type'           => 'VARCHAR',
				'constraint'	 => '30',
			],
			'date'      => [
				'type'           => 'date',
			],
		]);

			// Membuat primary key
			$this->forge->addKey('id', TRUE);

			// Membuat tabel news
			$this->forge->createTable('daftar', TRUE);
	}

	public function down()
	{
		//
		$this->forge->dropTable('daftar');
	}
}
