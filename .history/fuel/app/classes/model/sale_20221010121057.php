<?php

class Model_Sale extends \Orm\Model
{
	protected static $_properties = array(
		"id" => array(
			"label" => "Id",
			"data_type" => "int",
		),
		"product_id" => array(
			"label" => "Product id",
			"data_type" => "int",
		),
		"order" => array(
			"label" => "Order",
		"data_type" => "int",		
		),
		"sale" => array(
			"label" => "Sale",
			"data_type" => "int",
		),
		"created_at" => array(
			"label" => "Created at",
			"data_type" => "int",
		),
		"updated_at" => array(
			"label" => "Updated at",
			"data_type" => "int",
		),
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'property' => 'created_at',
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'property' => 'updated_at',
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'sales';

	protected static $_primary_key = array('id');

	protected static $_has_many = array(
	);

	protected static $_many_many = array(
	);

	protected static $_has_one = array(
		"products" => [
			"key_from" => "product_id",
			'model_to' => 'Model_Product',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		]
	);

	protected static $_belongs_to = ["products"];

	public static function exportSales() {
		$sales = DB::select('products.name', 'price', 'company_name', 'order', 'sale', 'created_at')
								->from('products')
								->join('companies', 'INNER')->on('products.company_id', '=', 'companies.id')
								->join('sales', 'INNER')->on('products.id', '=', 'sales.product_id')
								->execute()
								->as_array();
		exit();
	}

}
