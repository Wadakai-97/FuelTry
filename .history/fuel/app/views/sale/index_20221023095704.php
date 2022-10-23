<h1>top</h1>
<?php if( ! empty($one)): ?>
  <div class="alert alert-success" role="alert">
      <p></p><?php echo $one; ?>
  </div>
<?php endif ?>


<?= Form::open(array('action'=>'sale/day', 'class'=>'form-inline text-center center-block')) ?>
  <div class="form-group col-auto">
    <?= Form::submit('', '結果を表示する', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>