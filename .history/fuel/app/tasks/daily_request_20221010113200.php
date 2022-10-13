<?php
namespace Fuel\Tasks;

class Daily_Request {
  public function run() {
    for($i=0; $i<2; $i++) {
      \DB::insert('sales')->set(array(
                                    'product_id' => '1',
                                    'order' => '5',
                                    'sale' => '',
                                  ))
                              ->execute();
      echo '現在、' . $i . '件目のデータ登録を行いました。';
    }
    echo "バッチ処理の動作が完了しました。";
  }
}