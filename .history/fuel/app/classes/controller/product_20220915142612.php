<?php

class Controller_Product extends Controller_Template
{

	public function action_show()
	{
		$data["subnav"] = array('show'=> 'active' );
		$this->template->title = 'Product &raquo; Show';
		$this->template->content = View::forge('product/show', $data);
	}

	public function action_first_try

}
