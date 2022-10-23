<?php

namespace Fuel\Tasks;

class Product
{

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r product
	 *
	 * @return string
	 */
	public function run($args = NULL)
	{
		for($i=0; $i<50; $i++) {
      \DB::insert('sales')->set(array(
                                    'product_id' => '8',
                                    'order' => '5',
                                    'discount' => '0',
                                    'sale' => '8000',
                                    'created_at' => '20220120'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '13',
                                    'order' => '4',
                                    'discount' => '100',
                                    'sale' => '12000',
                                    'created_at' => '20220220'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '9',
                                    'order' => '1',
                                    'discount' => '0',
                                    'sale' => '7000',
                                    'created_at' => '20220320',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '10',
                                    'order' => '2',
                                    'discount' => '100',
                                    'sale' => '9000',
                                    'created_at' => '20220420'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '11',
                                    'order' => '7',
                                    'discount' => '5000',
                                    'sale' => '80000',
                                    'created_at' => '20220520'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '14',
                                    'order' => '2',
                                    'discount' => '0',
                                    'sale' => '80',
                                    'created_at' => '20220620'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '15',
                                    'order' => '2',
                                    'discount' => '0',
                                    'sale' => '7000',
                                    'created_at' => '20220720'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '16',
                                    'order' => '2',
                                    'discount' => '100',
                                    'sale' => '7000',
                                    'created_at' => '20220820'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '12',
                                    'order' => '10',
                                    'discount' => '7080',
                                    'sale' => '60800',
                                    'created_at' => '20220902'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '13',
                                    'order' => '5',
                                    'discount' => '8000',
                                    'sale' => '20000',
                                    'created_at' => '20221002'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '14',
                                    'order' => '10',
                                    'discount' => '9000',
                                    'sale' => '60800',
                                    'created_at' => '20221102'
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '15',
                                    'order' => '4',
                                    'discount' => '700',
                                    'sale' => '3200',
                                    'created_at' => '20221202'
                                  ))
                              ->execute();
    }
    echo "バッチ処理の動作が完了しました。";
	}



	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r product:index "arguments"
	 *
	 * @return string
	 */
	public function index($args = NULL)
	{
		echo "\n===========================================";
		echo "\nRunning task [Product:Index]";
		echo "\n-------------------------------------------\n\n";

		/***************************
		 Put in TASK DETAILS HERE
		 **************************/
	}

}
/* End of file tasks/product.php */
