<h1></h1>
<?php if( ! empty($success_message)): ?>
  <div class="alert alert-success" role="alert">
      <?php echo $success_message; ?>
  </div>
<?php endif ?>

<?= Form::open('sale/sample') ?>
  <div class="form-group"> 
    <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>

<?echo $sale ?>