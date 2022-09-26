<?php

class Controller_Company extends Controller_Layout
{
  // 新規登録：画面表示
	public function action_form() {
		$this->template->content = VIew::forge('company/signup');
	}
	// 新規登録：登録処理
	public function action_signup() {
		$result = DB::insert('companies')
								->set(array(
									'company_name' => Input::post('company_name'),
									'address' => Input::post('address'),
								))
								->execute();
	
		if($result[1] > 0){
			$data['success_message'] = '会社登録に成功しました！';
		}
		$this->template->content = VIew::forge('company/signup', $data);
	}
	// 一覧画面：表示
  public function action_list() {
		$config = array(
			'pagination_url' => 'http://localhost:8888/public/company/list',
			'total_items'    => 30,
			'per_page' => 10,
			'uri_segment' => 3,
		);

		$pagination = Pagination::forge('mypagination', $config);

		$data = array();
		$data['companies'] = DB::select('companies.id', 'company_name', 'address')
													->from('companies')
													->limit($pagination->per_page)
													->offset($pagination->offset)
													->execute()
													->as_array();
		$data['pagination'] = $pagination;
    $this->template->content = View::forge('company/list', $data);
  }
  // 一覧画面：表示メモ
	public function action_list_memo() {

		$config = array(
			'pagination_url' => 'http://localhost:8888/public/company/list',
			'total_items'    => 30,
			'per_page' => 10,
			'uri_segment' => 3,
		);

		$pagination = Pagination::forge('mypagination', $config);

		$data = array();
		$data['title'] = '物件一覧';
		$data['companies'] = DB::select('id', 'company_name', 'address')
													->from('companies')
													->limit($pagination->per_page)
													->offset($pagination->offset)
													->execute()
													->as_array();
		$data['pagination'] = $pagination;

		$this->template->content = View::forge('company/list', $data);
	}
	// 詳細画面：表示
	public function action_detail($id) {
		$data['company'] = DB::select('id', 'company_name', 'address')->from('companies')->where('id', $id)->execute()->as_array();
		$this->template->content = VIew::forge('company/detail', $data);
	}
	// 編集画面：表示
	public function action_edit($id) {
		if(Auth::has_access('company.update')) {
			$data['company'] = DB::select('id', 'company_name', 'address')->from('companies')->where('id', $id)->execute()->as_array();
			$this->template->content = VIew::forge('company/edit', $data);
		} else {
			$data['company'] = DB::select('id', 'company_name', 'address')->from('companies')->where('id', $id)->execute()->as_array();
			$data['error_message'] = "ご利用のアカウントでは編集権限がありません。";
			$this->template->content = VIew::forge('company/detail', $data);
		}
	}
	// 編集登録：登録処理
	public function action_update($id) {
		$result = DB::update('companies')
								->where('id', $id)
								->set(array(
									'company_name' => Input::post('company_name'),
									'address' => Input::post('address'),
								))
								->execute();

		if($result > 0){
			$data['success_message'] = '会社情報の編集に成功しました！';
		}
		
		$data['company'] = DB::select('id', 'company_name', 'address')->from('companies')->where('id', $id)->execute()->as_array();
		$this->template->content = VIew::forge('company/edit', $data);
	}
	// 削除処理
	public function action_delete($id) {
		$delete_result = DB::delete('companies')->where('id', $id)->execute();

		$config = array(
			'pagination_url' => 'http://localhost:8888/public/company/list',
			'total_items'    => 30,
			'per_page' => 10,
			'uri_segment' => 3,
		);
		$pagination = Pagination::forge('mypagination', $config);

		if($delete_result > 0) {
			$data['success_message'] = '会社登録に成功しました！';
		}
		$data['companies'] = DB::select('id', 'company_name', 'address')
												->from('companies')
												->limit($pagination->per_page)
												->offset($pagination->offset)
												->execute()
												->as_array();
		$data['contents'] = date('Y年m月d日') . '現在時点';

		$this->template->content = View::forge('company/list', $data);
	}	
}