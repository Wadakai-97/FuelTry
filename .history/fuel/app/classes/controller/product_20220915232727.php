<?php

class Controller_Product extends Controller_Template
{

	public function action_show()
	{
		$data["subnav"] = array('show'=> 'active', 'title' => '初めてのFuelPHP', 'contents' => 'これは本文です。');
		$data["title"] = array('title' => '初めてのFuelPHP');
		$data["contents"] = array('title' => 'これは本文です。');
		$this->template->title = 'Product &raquo; Show';
		$this->template->content = View::forge('product/show', $data);
	}

	public function action_show_list() {
		$data = array();
		$products = DB::select('id', 'name', 'price', 'company_id')->from('products')->execute()->as_array();

		$view = View::forge('product/list');
		$view->subtitle = 'サンプル株式会社の在庫にある商品一覧です。';
		$view->contents = date('Y年m月d日') . '現在時点';
		$view->products = DB::select('id', 'name', 'price', 'company_id')->from('products')->execute()->as_array();
		return $view;

		return $view;
	}

	public function action_signup() {
		$result = DB::insert('products')->set(array(
			'name' => Input::post('name'),
			'price' => Input::post('price'),
			'company_id' => Input::post('company_id'),
		) )->execute();
	
		if($result[1] > 0){
			$view = VIew::forge('product/list');
			$view->set('subtitle', 'サンプル株式会社の在庫にある商品一覧です。');
			$view->set('contents', date('Y年m月d日') . '現在時点');
			return $view;
		}
	}

}