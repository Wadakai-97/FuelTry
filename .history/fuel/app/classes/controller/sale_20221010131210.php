<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$data['sales'] = Model_Sale::exportSales();
		debug::dump($data['sales']);
		$this->template->content = View::forge('sale/list', $data);
	}

}
