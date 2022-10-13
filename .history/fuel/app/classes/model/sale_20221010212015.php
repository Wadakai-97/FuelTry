<?php

class Model_Sale extends \Orm\Model
{
	protected static $_created_at = 'created_at';
	protected static $_updated_at = 'updated_at';
	protected static $_mysql_timestamp = true;

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
		"discount" => array(
			"label" => "Discount",
		"data_type" => "int",		
		),
		"sale" => array(
			"label" => "Sale",
			"data_type" => "int",
		),
		"created_at" => array(
			"label" => "Created at",
			"data_type" => "timestamp",
		),
		"updated_at" => array(
			"label" => "Updated at",
			"data_type" => "timestamp",
		),
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'property' => 'created_at',
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'property' => 'updated_at',
			'mysql_timestamp' => true,
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
		$sales = DB::select('sales.id', 'sales.product_id', 'products.name', 'products.price', 'sales.order', 'sale', 'sales.created_at')
								->from('sales')
								->join('products', 'left')->on('sales.product_id', '=', 'products.id')
								->join('companies', 'INNER')->on('products.company_id', '=', 'companies.id')
								->execute()
								->as_array();
		return $sales;
	}

	public static function total() {
		try {
			$filename = '売上一覧_'.date('Ymd').'.csv';
			$filePath = APPPATH . "tmp/zip/" . $filename;
			$csvFile = fopen($filePath, 'w');
			if ($csvFile === FALSE) {
				throw new Exception('ファイルの書き込みに失敗しました。');
			}

			$sales = DB::select(DB::expr('SUM(id) AS t_order'), DB::expr('SUM(sale) AS t_dis'), DB::expr('SUM(sale) AS t_sales', )
									->from('sales')
									->execute()
									->as_array();

			$header = array('発注案件数', '値引金額合計', '売上合計');
			mb_convert_variables('SJIS', 'UTF-8', $header);
			fputcsv($csvFile, $header);

			foreach($sales as $sale){
				mb_convert_variables('SJIS', 'UTF-8', $sale);
				fputcsv($csvFile, $sale);
			}
			
			header('Content-Type: application/octet-stream');
			header("Content-Disposition: attachment; filename=$filename.csv"); 

			readfile($filePath);
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		exit();
	}
}
