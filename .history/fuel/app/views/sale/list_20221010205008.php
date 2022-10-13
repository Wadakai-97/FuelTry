<h3>売上一覧</h3>
<table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>売上ID</th>
        <th>商品名</th>
        <th>販売価格</th>
        <th>注文数</th>
        <th>売上金額</th>
        <th colspan=2></th>
      </tr>
    </thead>
    <tbody>
    <?php 
      foreach($sales as $sale) {
      echo '<tr><td>' . $sale['id'] . '</td>' .
            '<td>' . $sale['name'] . '</td>' .
            '<td>' .  number_format($sale['price']) . '</td>' .
            '<td>' .  number_format($sale['order']) . '</td>' .
            '<td>' .  number_format($sale['sale']) . '</td>' .
            '<td>' .  Form::open('sale/detail/' . $sale['id']) . 
                        Form::submit('', '詳細') . 
                      Form::close() .
            '</td>' .
            '<td>' .  Form::open('sale/delete/' . $sale['id']) . 
                        Form::submit('', '削除') . 
                      Form::close() .
            '</td></tr>';
      }
    ?>
      <?php 
        foreach($total as $total) {
        echo '<tr><td>合計金額</td><td></td><td></td><td></td><td>' . number_format($total['total']) . '</td><td></td><td></td></tr>';
      }
    ?>
    </tbody>
  </table>