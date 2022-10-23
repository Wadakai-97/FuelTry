<h1>top</h1>
<?php if( ! empty($result)): ?>
  <div class="alert alert-success" role="alert">
      <?php echo $result; ?>
  </div>
<?php endif ?>


<?= Form::open(array('action'=>'sale/ex', 'class'=>'form-inline text-center center-block')) ?>
  <div class="form-group col-auto">
    <?= Form::submit('', '結果を表示する', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>