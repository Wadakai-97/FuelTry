<h1>top</h1>
<?php if( ! empty($one)): ?>
  <div class="alert alert-success" role="alert">
      <p>1営業日前は、<?php echo $one; ?></p>
  </div>
<?php endif ?>
<?php if( ! empty($two)): ?>
  <div class="alert alert-success" role="alert">
      <p>2営業日前は、<?php echo $two; ?></p>
  </div>
<?php endif ?>

<p><?php echo date ('Ymd')) ?></p>
<p>休暇日</p>
<?php foreach($holidays as $holiday)  { echo
$holiday . '、';
}
?>

<?= Form::open(array('action'=>'sale/day', 'class'=>'form-inline text-center center-block')) ?>
  <div class="form-group col-auto">
    <?= Form::submit('', '結果を表示する', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>