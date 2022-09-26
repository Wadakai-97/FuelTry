<h3>商品詳細</h3>

<?php if( ! empty($error_message)): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo $error_message; ?>
  </div>
<?php endif ?>

<table class="table table-striped">
  <thead>
    <tr class="table-primary">
      <th>ID</th>
      <th>商品名</th>
      <th>販売価格（円）</th>
      <th>会社名</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach($product as $product) {
    echo '<tr><td>' . $product['id'] . '</td>' .
          '<td>' . $product['name'] . '</td>' .
          '<td>' .  number_format($product['price']) . '</td>' .
          '<td>' . $product['company_name'] . '</td>' .
          '<td>' .  Form::open('product/edit/' . $product['id']) . 
                      Form::submit('', '編集') . 
                    Form::close() .
          '</td>' .
          '</tr>';
        }
  ?>
  </tbody>
</table>