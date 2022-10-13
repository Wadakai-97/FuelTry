<?php
namespace Fuel\Tasks;

class Daily_Request {
  public function run() {
    for($i=0; $i<2; $i++) {
      \DB::insert('products')->set(array(
                                    'name' => 'テストおにぎり',
                                    'price' => '9000',
                                    'company_id' => '1',
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
                                    'name' => 'サンプル食品プロダクト',
                                    'price' => '5000',
                                    'company_id' => '2',
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
                                    'name' => 'お試しパック',
                                    'price' => '1000',
                                    'company_id' => '3',
                                  ))
                              ->execute();
      \DB::insert('products')->set(array(
                                    'name' => '試供品',
                                    'price' => '300',
                                    'company_id' => '4',
                                  ))
                              ->execute();
      echo '現在、' . $i . '件目のデータ登録を行いました。';
    }
    echo "バッチ処理の動作が完了しました。";
  }
}