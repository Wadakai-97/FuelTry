<?php
namespace Fuel\Tasks;

class Daily_Request {
  public function run() {
    for($i=0; $i<100; $i++) {
      \DB::insert('sales')->set(array(
                                    'product_id' => '8',
                                    'order' => '5',
                                    'discount' => '0',
                                    'sale' => '8000',
                                    'created_at' => strtotime('2022-01-20 07:00:00')
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '9',
                                    'order' => '1',
                                    'discount' => '0',
                                    'sale' => '7000',
                                    'created_at' => strtotime('2022-03-20 07:00:00'),
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '10',
                                    'order' => '2',
                                    'discount' => '100',
                                    'sale' => '9000',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '11',
                                    'order' => '7',
                                    'discount' => '5000',
                                    'sale' => '80000',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '12',
                                    'order' => '10',
                                    'discount' => '7080',
                                    'sale' => '60800',
                                  ))
                              ->execute();
    }
    echo "バッチ処理の動作が完了しました。";
  }
}