<?php

class Controller_Sales extends Controller_Layout
{
	public function action_list() {
		$data['sales'] = Model_Sale::exportSales();
		$this->template->content = View::forge('sale/list', $data);
	}

}
