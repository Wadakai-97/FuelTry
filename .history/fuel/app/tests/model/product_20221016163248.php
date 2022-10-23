<?php
/**
 * @group Model
 * @group Product
 */

class Test_Product extends \TestCase {

  public function test_signUp() :void {
		DB::insert('products')
			->set(array(
						'name' => 'サンプル商品',
						'price' => '9800',
						'company_id' => '3',
						))
			->execute();
  }
}