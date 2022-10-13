<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$this->template->content = View::forge('sale/report');
	}

	public function action_exportSummary() {
		$header = Model_Sale::header();
		$datas = Model_Sale::getData();
		debug::dump($datas);
		Model_Sale::exportCsv($header, $datas);

	}

}
