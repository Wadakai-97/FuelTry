<?php if( ! empty($success_message)): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $success_message; ?>
    </div>
  <?php endif ?>

  <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>会社名</th>
        <th>住所</th>
        <th colspan=2></th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach($companies as $company) {
        echo '<tr><td>' . $company['id'] . '</td>' .
              '<td>' . $company['company_name'] . '</td>' .
              '<td>' .  $company['address'] . '</td>' .
              '<td>' .  Form::open('company/detail/' . $company['id']) . 
                          Form::submit('', '詳細') . 
                        Form::close() .
              '</td>' .
              '<td>' .  Form::open('company/delete/' . $company['id']) . 
                          Form::submit('', '削除') . 
                        Form::close() .
              '</td>' .
              '</td>';
      }
    ?>
    </tbody>
  </table>

  <div class="text-center">
    <div class="pagination text-center">
      <?php echo Pagination::instance('mypagination')->render(); ?>
    </div>
  </div>