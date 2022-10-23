<?php
/**
 * @group Product
 */

class Test_Product extends TestCase {

	/***
	 * @group first
	 */
  public function test_signUp():void
	{
			$result = DB::insert('products')
										->set(array(
													'name' => 'サンプル商品',
													'price' => '10000',
													'company_id' => '1',
													'created_at' => date('YmdHis'),
													))
										->execute();

			$this->assertNotEmpty($result);
  }

	/**
	 * @group second
	 */
  // public function test_signUpSecond():void
	// {
	// 		$result = DB::insert('products')
	// 									->set(array(
	// 												'name' => 'サンプル商品',
	// 												'price' => '200',
	// 												'company_id' => '2',
	// 												))
	// 									->execute();

	// 		$this->assertNotEmpty($result);
  // }
}