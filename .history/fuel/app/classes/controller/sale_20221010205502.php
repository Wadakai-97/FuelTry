<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$data['sales'] = Model_Sale::exportSales();
		$data['total'] = Model_Sale::total();
		$this->template->content = View::forge('sale/list', $data);
	}

	public function 

}
