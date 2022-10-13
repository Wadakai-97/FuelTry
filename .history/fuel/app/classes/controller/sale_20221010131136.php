<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$data['sales'] = Model_Sale::exportSales();
		debug::fump($products);
		$this->template->content = View::forge('sale/list', $data);
	}

}
