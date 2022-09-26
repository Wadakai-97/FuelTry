<h3>会社詳細</h3>
<?php if( ! empty($error_message)): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo $error_message; ?>
  </div>
<?php endif ?>

<table class="table table-striped">
  <thead>
    <tr class="table-primary">
      <th>ID</th>
      <th>会社名</th>
      <th>住所</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach($company as $company) {
    echo '<tr><td>' . $company['id'] . '</td>' .
          '<td>' . $company['company_name'] . '</td>' .
          '<td>' .  $company['address'] . '</td>' .
          '<td>' .  Form::open('company/edit/' . $company['id']) . 
                      Form::submit('', '編集') . 
                    Form::close() .
          '</td>' .
          '</tr>';
        }
  ?>
  </tbody>
</table>