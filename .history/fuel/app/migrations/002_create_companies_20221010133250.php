<?php

namespace Fuel\Migrations;

class Create_companies
{
	public function up()
	{
		\DBUtil::create_table('companies', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'company_name' => array('type' => 'varchar', 'null' => false, 'constraint' => 30),
			'address' => array('type' => 'varchar', 'null' => false, 'constraint' => 50),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'timestamp', 'unsigned' => FALSE),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'timestamp', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('companies');
	}
}