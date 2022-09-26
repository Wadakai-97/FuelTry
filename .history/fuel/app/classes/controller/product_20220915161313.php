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
		$view->set('subtitle')
	}

}
