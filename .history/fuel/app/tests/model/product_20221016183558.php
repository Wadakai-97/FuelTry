<?php
/**
 * @group Product
 */

class Test_Product extends TestCase {

  public function test_signUp():void
	{
			$result = DB::insert('products')
										->set(array(
													'name' => 'サンプル商品',
													'price' => '10000',
													'company_id' => '1',
													))
										->execute();

			$this->assertNotEmpty($result);
  }
  public function test_signUp():void
	{
			$result = DB::insert('products')
										->set(array(
													'name' => 'サンプル商品',
													'price' => '10000',
													'company_id' => '1',
													))
										->execute();

			$this->assertNotEmpty($result);
  }
}