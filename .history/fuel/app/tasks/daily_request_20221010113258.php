<?php
namespace Fuel\Tasks;

class Daily_Request {
  public function run() {
    for($i=0; $i<2; $i++) {
      \DB::insert('sales')->set(array(
                                    'product_id' => '1',
                                    'order' => '5',
                                    'sale' => '8000',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '5',
                                    'order' => '1',
                                    'sale' => '7000',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '3',
                                    'order' => '2',
                                    'sale' => '9000',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '8',
                                    'order' => '7',
                                    'sale' => '00',
                                  ))
                              ->execute();
      \DB::insert('sales')->set(array(
                                    'product_id' => '1',
                                    'order' => '5',
                                    'sale' => '8000',
                                  ))
                              ->execute();
      echo '現在、' . $i . '件目のデータ登録を行いました。';
    }
    echo "バッチ処理の動作が完了しました。";
  }
}