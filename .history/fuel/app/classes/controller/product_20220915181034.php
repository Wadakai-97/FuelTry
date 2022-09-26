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
		$view = VIew::forge('product/list');
		$view->set('subtitle', 'サンプル株式会社の在庫にある商品一覧です。');
		$view->set('contents', date('Y年m月d日') . '現在時点');
		return $view;
	}

	public function action_signup() {
		$result = DB::insert('products')->set(array(
			'' => 'hoge',
			'col2' => 'fuga',
		) )->execute();
	
	if($result[1] > 0){
		console.log('登録成功');
	}
	}

}
