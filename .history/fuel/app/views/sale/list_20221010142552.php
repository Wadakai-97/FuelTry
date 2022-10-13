<table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>売上ID</th>
        <!-- <th>製造会社</th> -->
        <th>商品名</th>
        <th>販売価格</th>
        <th>注文数</th>
        <th>売上金額</th>
        <th>売上日</th>
        <th colspan=2></th>
      </tr>
    </thead>
    <tbody>
    <?php 
      foreach($sales as $sale) {
      echo '<tr><td>' . $sale['id'] . '</td>' .
            // '<td>' . $sale['company_name'] . '</td>' .
            '<td>' . $sale['name'] . '</td>' .
            '<td>' .  number_format($sale['price']) . '</td>' .
            '<td>' .  number_format($sale['order']) . '</td>' .
            '<td>' .  number_format($sale['sale']) . '</td>' .
            '<td>' .  $sale['created_at'] . '</td>' .
            '<td>' .  Form::open('sale/detail/' . $sale['id']) . 
                        Form::submit('', '詳細') . 
                      Form::close() .
            '</td>' .
            '<td>' .  Form::open('sale/delete/' . $sale['id']) . 
                        Form::submit('', '削除') . 
                      Form::close() .
            '</td></tr>';
      }
      // foreach($sales as $sale) {
      // echo '<tr><td>' . $sale['id'] . '</td>' .
      //       // '<td>' . $sale['company_name'] . '</td>' .
      //       '<td>' . $sale['name'] . '</td>' .
      //       '<td>' .  number_format($sale['price']) . '</td>' .
      //       '<td>' .  number_format($sale['order']) . '</td>' .
      //       '<td>' .  number_format($sale['sale']) . '</td>' .
      //       '<td>' .  $sale['created_at'] . '</td>' .
      //       '<td>' .  Form::open('sale/detail/' . $sale['id']) . 
      //                   Form::submit('', '詳細') . 
      //                 Form::close() .
      //       '</td>' .
      //       '<td>' .  Form::open('sale/delete/' . $sale['id']) . 
      //                   Form::submit('', '削除') . 
      //                 Form::close() .
      //       '</td></tr>';
      // }
    ?>
    </tbody>
  </table>