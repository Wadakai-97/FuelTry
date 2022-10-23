<?php

namespace Fuel\Migrations;

class Create_products
{
	public function up()
	{
		\DBUtil::create_table('products', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'name' => array('type' => 'varchar', 'null' => false, 'constraint' => 50),
			'price' => array('type' => 'int', 'null' => false, 'constraint' => 11),
			'company_id' => array('type' => 'int', 'null' => false, 'constraint' => 10),
			'created_at' => array('null' => true, 'type' => 'datetime', 'unsigned' => FALSE),
			'updated_at' => array('null' => true, 'type' => 'datetime', 'unsigned' => FALSE),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('products');
	}
}