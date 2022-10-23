<?php

namespace Fuel\Tasks;

class Daily
{

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r daily
	 *
	 * @return string
	 */
	public function run()
	{
		Log::info('daily_requestの処理を開始しました。');
		if(!empty($today)) {
			$today = date('Ymd');
		}
		$holidays = [
			'20221018', '20221020', '20221022',
		];
		$one = \Model_Sale::one_working_days_ago($today, $holidays);
		$two = Model_Sale::two_working_days_ago($one, $holidays);	
		Log::info('daily_requestの処理を終了しました。');
	}



	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r daily:index "arguments"
	 *
	 * @return string
	 */
	public function index($args = NULL)
	{
		echo "\n===========================================";
		echo "\nRunning task [Daily:Index]";
		echo "\n-------------------------------------------\n\n";

		/***************************
			Put in TASK DETAILS HERE
		 **************************/
	}

}
/* End of file tasks/daily.php */
