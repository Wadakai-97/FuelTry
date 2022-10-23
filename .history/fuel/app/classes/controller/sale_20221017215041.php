<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$data['sale'] = DB::select('*')
											->from('sales')
											->execute()
											->as_array();
											debug::dump();
		$this->template->content = View::forge('sale/report', $data);
	}

	public function action_exportSummary() {
		$header = Model_Sale::header();
		$datas = Model_Sale::getData();
		Model_Sale::exportCsv($header, $datas);
	}

	public function action_update() {
		$data['result'] = DB::update('sales')
												->set(array(
													'discount' => '0',
												))
												->execute();
	if($data['result'] > 0) {
		$data['success_message'] = "なんと、" . $data['result'] . "件のデータ登録に成功しました。";
	}
	
	$this->template->content = View::forge('sale/report', $data);					
	}

	public function action_date() {
	if($data['result'] > 0) {
		$data['success_message'] = "なんと、" . $data['result'] . "件のデータ登録に成功しました。";
	}
	
	$this->template->content = View::forge('sale/report', $data);					
	}

	public function action_sample() {
		$this->template->content = Presenter::forge('sale/top', 'sum');
	}
}
