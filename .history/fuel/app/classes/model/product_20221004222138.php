<?php

class Model_Product extends \Orm\Model
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
		"price" => array(
			"label" => "Price",
			"data_type" => "int",
		),
		"company_id" => array(
			"label" => "Company id",
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
	protected static $_table_name = 'products';
	protected static $_primary_key = array('id');
	protected static $_has_many = array(
	);
	protected static $_many_many = array(
	);
	protected static $_has_one = array(
		"companies" => [
			"key_from" => "company_id",
			'model_to' => 'Model_Company',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		]
	);
	protected static $_belongs_to = ["companies"];


	/*
	商品一覧：ページネーション構成
	*/
	public static function getListConfig() {
		$total_number = Model_Product::count();
		$config = array(
			'pagination_url' => 'http://localhost:8888/public/product/list',
			'total_items'    => $total_number,
			'per_page' => 10,
			'uri_segment' => 3,
			'num_link' => 3,
		);
		return $config;
	}
	/*
	商品一覧：データ取得
	*/
	public static function getList($pagination) {
		$products = DB::select('products.id', 'name', 'price', 'company_id', 'company_name')
									->from('products')
									->join('companies', 'INNER')
									->on('products.company_id', '=', 'companies.id')
									->limit($pagination->per_page)
									->offset($pagination->offset)
									->execute()
									->as_array();
		return $products;
	}

	/*
	商品検索：ページネーション構成
	*/
	public static function searchConfig() {
		$product_name_keyword = Input::post('name') ?? '';
		$company_id_keyword = Input::param('company_id');
		$products = DB::select('products.id', 'name', 'price', 'company_id', 'company_name')
													->from('products')
													->join('companies', 'INNER')
													->on('products.company_id', '=', 'companies.id');
		if(!empty($product_name_keyword)) {
			$products->where('name', 'like', '%' . $product_name_keyword . '%');
		}
		if(!empty($company_id_keyword)) {
			$products->where('company_id', '=', $company_id_keyword);
		}
		$total_number = count($products->execute());
		$config = array(
			'pagination_url' => 'http://localhost:8888/public/product/list',
			'total_items'    => $total_number,
			'per_page' => 10,
			'uri_segment' => 3,
			'num_link' => 3,
		);
		return $config;
	}
	/*
	商品検索：データ取得
	*/
	public static function search($pagination) {
		$product_name_keyword = Input::post('name') ?? '';
		$company_id_keyword = Input::param('company_id');
		$query = DB::select('products.id', 'name', 'price', 'company_id', 'company_name')
													->from('products')
													->join('companies', 'INNER')
													->on('products.company_id', '=', 'companies.id');
		if(!empty($product_name_keyword)) {
			$query->where('name', 'like', '%' . $product_name_keyword . '%');
		}
		if(!empty($company_id_keyword)) {
			$query->where('company_id', '=', $company_id_keyword);
		}
		$products = $query->limit($pagination->per_page)
											->offset($pagination->offset)
											->execute()
											->as_array();
		return $products;
	}

	/*
	商品登録：バリデーション
	*/
	public static function validate() {
		$validate  = Validation::forge();
		$validate->add_field('name','商品名', 'required|max_length[30]');
		$validate->add_field('price', '販売価格（円）', 'required|match_pattern[/^[0-9]+$/]'); 
		$validate->add_field('company_id', '会社名', 'required|numeric[1]', );
		return $validate;
	}

	/*
	商品登録：データ登録
	*/
	public static function signUp() {
		$process = DB::insert('products')
									->set(array(
												'name' => Input::post('name'),
												'price' => Input::post('price'),
												'company_id' => Input::post('company_id'),
												))
									->execute();

		return $process;
	}

	
	/*
	商品詳細：データ取得
	*/
	public static function detail($id) {
		$product = DB::select('products.id', 'name', 'price', 'company_id', 'company_name')
													->from('products')
													->join('companies', 'INNER')
													->on('products.company_id', '=', 'companies.id')
													->where('products.id', $id)
													->execute()
													->as_array();
		return $product;
	}

	/*
	CSV出力：検索条件絞り込み
	*/
	public static function searchCsv() {
		$product_name_keyword = Input::post('name') ?? '';
		$company_id_keyword = Input::param('company_id');
		$query = DB::select('products.id', 'name', 'price', 'company_id', 'company_name')
													->from('products')
													->join('companies', 'INNER')
													->on('products.company_id', '=', 'companies.id');
		if(!empty($product_name_keyword)) {
			$query->where('name', 'like', '%' . $product_name_keyword . '%');
		}
		if(!empty($company_id_keyword)) {
			$query->where('company_id', '=', $company_id_keyword);
		}
		$products = $query->execute()->as_array();
		return $products;
	}
	/*
	CSV出力：ファイルネーム選定
	*/
	public static function fileName() {
		$type = Input::post('type');
		if(empty($type)) {
			$csv_name = "Sample";
		}
		return $csv_name;
	}
	/*
	CSV出力：生成＋キャッシュ削除
	*/
	public static function createCsv($products) {
		try {
			$filename = '商品情報一覧_'.date('Ymd').'.csv';
			$stream = fopen('php://output', 'w');
			if ($stream === FALSE) {
				throw new Exception('ファイルの書き込みに失敗しました。');
			}
			$header = array("ID", "商品名", "販売価格","会社ID", "会社名");
			mb_convert_variables('SJIS', 'UTF-8', $header);
			fputcsv($stream, $header);
			
			header('Content-Type: application/octet-stream');
			header("Content-Disposition: attachment; filename=$filename.csv"); 

			foreach($products as $product){
				mb_convert_variables('SJIS', 'UTF-8', $product);
				fputcsv($stream, $product);
			}
		} catch(Exception $e) {
			echo $e->getMessage();
		}

		exit();
	}
	/*
	CSV出力：CsvファイルZip圧縮出力
	*/
	public static function putZipcsv($products) {
		//Zipファイル出力
		$zip = new ZipArchive();
		$zipFileName = 'sample.zip';
		$result = $zip->open($zipFileName, ZipArchive::CREATE);
		if($result === FALSE) {
			throw new Exception('Zipファイルの書き出し処理に失敗しました。');
		}

		$csvFilePath = createCsv($products);
		$zip->addFile($csvFilePath, 'Sample.csv');
		$zip->close();

		readfile($ZipFileName);
		
		if(!unlink($zipFileName)) {
			throw new Exception('Zipファイルの削除に失敗しました。');
		}

		$delFileName = "CSVファイル保存パス/*.csv";
		foreach(glob($delFileName) as $val){
			if(!unlink($val)){
				throw new Exception('CSVファイルの削除処理に失敗しました。');
			}
		}

	}

	// public static function exportCsv($products, $csv_name) {
	// 	$response = new Response();
	// 	$response->set_header('Content-Type', 'application/csv');
	// 	$response->set_header('Content-Disposition', 'attachment; filename="'. $csv_name .'"');
	// 	$response->set_header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
	// 	$response->set_header('Expires', 'Mon, 26 Jul 1997 05:00:00 GMT');
	// 	$response->set_header('Pragma', 'no-cache');
	// 	echo Format::forge($products)->to_csv();
	// 	return $response;
	// }
}
