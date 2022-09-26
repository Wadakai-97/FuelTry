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
		$view = VIew::forge('product/show');
		$view->set('subtitle', '在庫にある商品一覧です。');
		$view->set('contents', '〇〇株式会社にて管理している商品一覧画面です。');
		return $view;
	}

}
