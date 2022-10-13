<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$data['sales'] = Model_Sale::summary();
		$this->template->content = View::forge('sale/list', $data);
	}

	public function action_total() {
		Model_Sale::monthly();
	}

}
