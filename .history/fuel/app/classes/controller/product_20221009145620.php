<?php

class Controller_Product extends Controller_Layout
{
	// 新規登録：画面表示
	public function action_form() {
		$data['companies'] = Model_Company::getList();
		$this->template->content = VIew::forge('product/signup', $data);
	}
	// 新規登録：登録処理
	public function action_signup() {
		$validate  = Model_Product::validate();

		if($validate->run()) {
			$result = Model_Product::signUp();
			if($result[1] > 0) {
				$data['success_message'] = "新規登録に成功しました。";
			} else {
				$data['error_message'] = "新規登録に失敗しました。";
			}
		} else {
			$data['error_message'] = "入力内容に誤りがあります。";
			$data['errors'] = $validate->error();
		}
		$data['companies'] = Model_Company::getList();
		$this->template->content = VIew::forge('product/signup', $data);
	}
	// 一覧画面：表示
	public function action_list() {
		$config = Model_Product::getListConfig();
		$pagination = Pagination::forge('mypagination', $config);

		$data['products'] = Model_Product::getList($pagination);
		$data['companies'] = Model_Company::getList();
		$data['pagination'] = $pagination;

		$this->template->content = View::forge('product/list', $data);
	}
	// 一覧画面：検索処理
	public function action_search() {		
		$config = Model_Product::searchConfig();
		$pagination = Pagination::forge('mypagination', $config);

		$data['products'] = Model_Product::search($pagination);
		$data['companies'] = Model_Company::getList();
		$data['pagination'] = $pagination;

		$this->template->content = View::forge('product/list', $data);
	}
	// 詳細画面：表示
	public function action_detail($id) {
		$data['product'] = Model_Product::detail($id);
		$this->template->content = VIew::forge('product/detail', $data);
	}
	// 編集画面：表示
	public function action_edit($id) {
		if(Auth::has_access('product.update')) {
			$data['product'] = DB::select('products.id', 'name', 'price', 'company_id', 'company_name')
														->from('products')
														->join('companies', 'INNER')
														->on('products.company_id', '=', 'companies.id')
														->where('products.id', $id)
														->execute()
														->as_array();
			$data['companies'] = DB::select('id', 'company_name')->from('companies')->execute()->as_array();
			$this->template->content = VIew::forge('product/edit', $data);
		} else {
			$data['product'] = Model_Product::detail($id);
			$data['error_message'] = "ご利用のアカウントでは編集権限がありません。";
			$this->template->content = VIew::forge('product/detail', $data);
		}
	}
	// 編集登録：登録処理
	public function action_update($id) {
		$result = DB::update('products')
								->where('id', $id)
								->set(array(
									'name' => Input::post('name'),
									'price' => Input::post('price'),
									'company_id' => Input::post('company_id'),
								))
								->execute();

		if($result > 0){
			$data['success_message'] = '商品情報の編集に成功しました！';
		}
		
		$data['product'] = DB::select('id', 'name', 'price', 'company_id')->from('products')->where('id', $id)->execute()->as_array();
		$this->template->content = VIew::forge('product/edit', $data);
	}
	/*
	削除処理
	*/
	public function action_delete($id) {
		$delete_result = DB::delete('products')->where('id', $id)->execute();
		$config = Model_Product::getListConfig();
		$pagination = Pagination::forge('mypagination', $config);

		$data['products'] = Model_Product::getList($pagination);
		$data['companies'] = Model_Company::getList();
		$data['pagination'] = $pagination;

		$this->template->content = View::forge('product/list', $data);
	}	

	/*
	CSV出力：画面表示
	*/
	public function action_csv() {
		$data['companies'] = Model_Company::getList();

		$this->template->content = View::forge('product/csv', $data);
	}
	/*
	CSV出力：データ生成
	*/
	public function action_exportCsv() {
		$products = Model_Product::searchCsv();
		$csv_name = Model_Product::fileName();
		Model_Product::createCsv($products);

		$config = Model_Product::getListConfig();
		$pagination = Pagination::forge('mypagination', $config);

		$data['products'] = Model_Product::getList($pagination);
		$data['companies'] = Model_Company::getList();
		$data['pagination'] = $pagination;

		$this->template->content = View::forge('product/csv', $data);
	}
	// ZIP出力：データ生成
	public function action_exportZip() {
		$products = Model_Product::getAll();
		$productCsv = Model_Product::productCsv($products);
		$companies = Model_Company::getAll();
		$companyCsv = Model_Product::companyCsv($companies);

		$files = array($productCsv, $companyCsv);

		$zip = new ZipArchive();
		$zipFileName = date('YmdHm') . '.zip';
		$zipFilePath = './tmp/sample/' . $zipFileName;
		$result = $zip->open($zipFilePath, ZipArchive::CREATE);
		if($result === TRUE) {
			foreach($files as $file) {
				
			}
			$file_name = basename($file)
			$zip->addFile($productCsv, "product.csv");
			$zip->addFile($companyCsv, "company.csv");
		}
		$zip->close();

		mb_http_output( "pass" );
		header('Content-Type: application/force-download');
    header("Content-Length: ".filesize($zipFilePath));
		header("Content-Disposition: attachment; filename=$zipFileName");
		ob_end_clean();

		readfile($zipFilePath);

		if(!unlink($zipFilePath)){
			throw new Exception('Zipファイルの書き出し処理に失敗しました。');
		}

		$delFileName = "CSVファイル保存パス/*.csv";
		foreach(glob($delFileName) as $val){
			if(!unlink($val)){
				throw new Exception('Csvファイルの書き出し処理に失敗しました。');
			}
		}
	}

}