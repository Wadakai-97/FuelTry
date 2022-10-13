<?php

class Controller_Sale extends Controller_Layout
{
	public function action_list() {
		$data['sales'] = Model_Sale::exportSales();
		$data['total'] = Model_Sale::total();
		$this->template->content = View::forge('sale/list', $data);
	}

	public function action_sumarry() {
		try {
			$filename = '売上一覧_'.date('Ymd').'.csv';
			$filePath = APPPATH . "tmp/zip/" . $filename;
			$csvFile = fopen($filePath, 'w');
			if ($csvFile === FALSE) {
				throw new Exception('ファイルの書き込みに失敗しました。');
			}

			$total = DB::select('SUM(id) AS t_dis', 'SUM(sale) AS t_dis', 'SUM(sale) AS t_sales', )
									->from('sales')
									->execute()
									->as_array();


			$header = array('発注数合計', '値引き割合', '値引き合計', '売上合計');
			mb_convert_variables('SJIS', 'UTF-8', $header);
			fputcsv($csvFile, $header);
			
			header('Content-Type: application/octet-stream');
			header("Content-Disposition: attachment; filename=$filename.csv"); 

			foreach($products as $product){
				mb_convert_variables('SJIS', 'UTF-8', $product);
				fputcsv($csvFile, $product);
			}
			readfile($filePath);
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		exit();
	}

}
