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
                                    'company_name' => '',
                                    'address' => '本牧三之谷',
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
      \DB::insert('companies')->set(array(
                                    'company_name' => 'サントリー',
                                    'address' => '本牧元町',
                                  ))
                              ->execute();
    echo "バッチ処理の動作が完了しました。";
  }
}