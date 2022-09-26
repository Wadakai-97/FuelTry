<h3>会社情報編集</h3>

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
          foreach($company as $company) {
      echo '<tr>' . Form::open('company/update/' . $company['id']) . 
            '<td>' . Form::input('name', $company['company_name'], array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）〇〇株式会社")). '</td>' .
            '<td>' . Form::input('address', $company['address'] , array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）東京都千代田区千代田１丁目１−１")). '</td>' .
            '<td>' . Form::hidden('id', $company['id']) . Form::submit('', '保存') . '</td>' . Form::close() . '</tr>';
          }
    ?>
  </tbody>
</table>