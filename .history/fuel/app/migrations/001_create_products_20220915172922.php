<?php

namespace Fuel\Migrations;

class Create_products
{
	public function up()
	{
		\DBUtil::create_table('products', array(

		));
	}

	public function down()
	{
		\DBUtil::drop_table('products');
	}
}