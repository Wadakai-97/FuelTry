<h3>商品編集</h3>

<?php if( ! empty($success_message)): ?>
  <div class="alert alert-success" role="alert">
      <?php echo $success_message; ?>
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
      echo '<tr>' . Form::open('product/update/' . $product['id']) . 
            '<td>' . Form::input('name', $product['name'], array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）コカコーラ")). '</td>' .
            '<td>' . Form::input('price', $product['price'] , array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")). '</td>' .
            '<td>' . Form::input('company_id', $product['company_name'], array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）11")). '</td>' .
            '<td>' . Form::hidden('id', $product['id']) . Form::submit('', '保存') . '</td>' . Form::close() . '</tr>';
          }
    ?>
  </tbody>
</table>