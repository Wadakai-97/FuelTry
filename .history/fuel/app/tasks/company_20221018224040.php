<?php
namespace Fuel\Tasks;

class Make_Company {
  public function run() {
      \DB::insert('companies')->set(array(
                                    'company_name' => 'サントリー',
                                    'address' => '本牧元町',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'キヨスク',
                                    'address' => '本牧三之谷',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => '横浜市交通局',
                                    'address' => '本牧大里町',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'JR東日本',
                                    'address' => '池袋',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'サントリー',
                                    'address' => '本牧元町',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'グーグルジャパン',
                                    'address' => 'みなとみらい',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'エノテカ',
                                    'address' => '元町',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'サントリー',
                                    'address' => '本牧元町',
                                  ))
                              ->execute();
      \DB::insert('companies')->set(array(
                                    'company_name' => 'サントリー',
                                    'address' => '本牧元町',
                                  ))
                              ->execute();
    echo "バッチ処理の動作が完了しました。";
  }
}