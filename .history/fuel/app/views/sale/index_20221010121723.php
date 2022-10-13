<table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>売上ID</th>
        <th>製造会社</th>
        <th>商品名</th>
        <th></th>
        <th colspan=2></th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach($products as $key => $product) {
      echo '<tr><td>' . $product['id'] . '</td>' .
            '<td>' . $product['name'] . '</td>' .
            '<td>' .  number_format($product['price']) . '</td>' .
            '<td>' . $product['company_name'] . '</td>' .
            '<td>' .  Form::open('product/detail/' . $product['id']) . 
                        Form::submit('', '詳細') . 
                      Form::close() .
            '</td>' .
            '<td>' .  Form::open('product/delete/' . $product['id']) . 
                        Form::submit('', '削除') . 
                      Form::close() .
            '</td></tr>';
      }
    ?>
    </tbody>
  </table>