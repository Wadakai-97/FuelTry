<?php

namespace Fuel\Migrations;

class Create_products
{
	public function up()
	{
		\DBUtil::create_table('products', array(
			'id' => array('type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'company_id' => array('type' => 'int', 'unsigned' => true),
			'company_id' => array('type' => 'int', 'unsigned' => true),
			'price' => array('constraint' => 10, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('products');
	}
}