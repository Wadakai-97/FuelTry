<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$this->template->content = View::forge('sale/report');
	}

	public function action_exportSummary() {
		$header = Model_Sale::header();
		$datas = Model_Sale::getData();
		Model_Sale::exportCsv($header, $datas);
	}

	public function action_update() {
		$result = DB::update('sales')
								->set(array(
									'discount' => '0',
								))
								->execute();
							
	}

}
