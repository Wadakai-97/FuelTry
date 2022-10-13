<?php

class Controller_Sale extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Sale &raquo; Index';
		$this->template->content = View::forge('sale/index', $data);
	}

}
