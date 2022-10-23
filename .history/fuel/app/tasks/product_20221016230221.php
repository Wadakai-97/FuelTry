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
      \DB::insert('products')->set(array(
                                    'name' => 'コカ・コーラ',
																		'price' => ' 150',
																		'company_id' => '1',
                                    'created_at' => '20220120'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'ソーダ',
																		'price' => '200',
																		'company_id' => '2',
                                    'created_at' => '20220220'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'レモンサワー',
																		'price' => '500',
																		'company_id' => '3',
                                    'created_at' => '20220320',
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'プレミアムモルツ',
																		'price' => '800',
																		'company_id' => '4',
                                    'created_at' => '20220420'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'アルマンドゴールド',
																		'price' => '500000',
																		'company_id' => '5',
																		'created_at' => '20220520'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'からあげ君',
																		'price' => '300',
																		'company_id' => '6',
                                    'created_at' => '20220620'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'アメリカンドック',
																		'price' => '220',
																		'company_id' => '7',
                                    'created_at' => '20220720'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
																		'name' => 'アメリカンドック',
																		'price' => '220',
																		'company_id' => '7',
                                    'created_at' => '20220820'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
                                    'product_id' => '12',
                                    'order' => '10',
                                    'discount' => '7080',
                                    'product' => '60800',
                                    'created_at' => '20220902'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
                                    'product_id' => '13',
                                    'order' => '5',
                                    'discount' => '8000',
                                    'product' => '20000',
                                    'created_at' => '20221002'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
                                    'product_id' => '14',
                                    'order' => '10',
                                    'discount' => '9000',
                                    'product' => '60800',
                                    'created_at' => '20221102'
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
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

}
/* End of file tasks/product.php */
