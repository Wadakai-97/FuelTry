<?php

class Model_Company extends \Orm\Model
{
	protected static $_properties = array(
		"id" => array(
			"label" => "Id",
			"data_type" => "int",
		),
		"name" => array(
			"label" => "Name",
			"data_type" => "varchar",
		),
		"address" => array(
			"label" => "Address",
			"data_type" => "varchar",
		),
		"created_at" => array(
			"label" => "Created at",
			"data_type" => "datetime",
		),
		"updated_at" => array(
			"label" => "Updated at",
			"data_type" => "datetime",
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

	public static function getList() {
		$companies = DB::select('id', 'company_name')
										->from('companies')
										->execute();
		$all = $companies->as_array();
										debug::dump($all);
		return $companies;
	}

	public static function getAll() {
		$companies = DB::select('id', 'company_name', 'address', 'created_at', 'updated_at')
										->from('companies')
										->execute()
										->as_array();

		return $companies;
	}

	protected static $_table_name = 'companies';

	protected static $_primary_key = array('id');

	protected static $_has_many = array('products' => array(
		'key_from' => 'id',
		'model_to' => 'Model_Product',
		'key_to' => 'company_id',
		'cascade_save' => false,
		'cascade_delete' => false,
	));

	protected static $_many_many = array(
	);

	protected static $_has_one = array(
	);

	protected static $_belongs_to = array(
	);

}
