<h1>top</h1>
<?php if( ! empty($result)): ?>
  <div class="alert alert-success" role="alert">
      <?php echo $result; ?>
  </div>
<?php endif ?>


<?= Form::open(array('action'=>'product/search', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', '検索', array('class'=>"btn btn-primary")) ?>
        </div>
        <?php if( ! empty($success_message)): ?>
          <div class="form-group col-auto">
            <?php echo Html::anchor('product/list', 'リセット', array('class'=>'btn btn-outline-secondary')); ?>
          </div>
        <?php endif ?>
      </div>
    <?= Form::close() ?>