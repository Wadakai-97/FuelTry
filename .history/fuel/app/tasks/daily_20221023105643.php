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
	public function run($args = NULL)
	{

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