<?php

namespace Fuel\Migrations;

class Create_sales
{
	public function up()
	{
		\DBUtil::create_table('sales', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'product_id' => array('null' => false, 'type' => 'int', 'unsigned' => true),
			'order' => array('null' => false, 'type' => 'int', 'unsigned' => true),
			'sale' => array('null' => false, 'type' => 'int', 'unsigned' => true),
			'created_at' => array('constraint' => 6, 'null' => true, 'type' => 'timestamp', 'unsigned' => FALSE),
			'updated_at' => array('constraint' => 6, 'null' => true, 'type' => 'timestamp', 'unsigned' => FALSE),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sales');
	}
}