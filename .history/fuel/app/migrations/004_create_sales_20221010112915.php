<?php

namespace Fuel\Migrations;

class Create_sales
{
	public function up()
	{
		\DBUtil::create_table('sales', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'product_id' => array('null' => false, 'type' => 'int', 'unsigned' => true),
			'product_id' => array('null' => false, 'type' => 'int', 'unsigned' => true),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sales');
	}
}