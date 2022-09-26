<?php

namespace Fuel\Migrations;

class Create_products
{
	public function up()
	{
		\DBUtil::create_table('products', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'product_name' => array('type' => 'varchar', 'null' => false, 'constraint' => 50),
			'price' => array('type' => 'int', 'null' => false, 'constraint' => 11),
			'company_id' => array('type' => 'varchar', 'null' => false, 'constraint' => 10),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('products');
	}
}