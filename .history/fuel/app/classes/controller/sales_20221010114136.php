<?php

class Controller_Sales extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Sales &raquo; Index';
		$this->template->content = View::forge('sales/index', $data);
	}

	public function action_exportSales()

}
