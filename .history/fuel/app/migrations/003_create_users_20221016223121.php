<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'username' => array('type' => 'varchar', 'null' => false, 'constraint' => 30),
			'group' => array('type' => 'varchar', 'null' => false, 'constraint' => 30),
			'email' => array('type' => 'varchar', 'null' => false, 'constraint' => 30),
			'password' => array('type' => 'varchar', 'null' => false, 'constraint' => 100),
			'profile_fields' => array('type' => 'varchar', 'null' => false, 'constraint' => 30),
			'last_login' => array('type' => 'varchar', 'null' => false, 'constraint' => 50),
			'login_hash' => array('type' => 'varchar', 'null' => false, 'constraint' => 50),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'datetime', 'unsigned' => FALSE),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'datetime', 'unsigned' => FALSE),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}