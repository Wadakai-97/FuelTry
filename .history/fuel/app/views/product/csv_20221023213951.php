<?php if( ! empty($result)): ?>
  <div class="alert alert-info" role="alert">
      <?php echo $result; ?>
  </div>
<?php endif ?>

<h3>すべてのデータを取得</h3>
    <?= Form::open(array('action'=>'product/exportZip', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', 'データ取得', array('class'=>"btn btn-primary")) ?>
        </div>
      </div>
    <?= Form::close() ?>

<h3>商品一覧をPDFで取得</h3>
    <?= Form::open(array('action'=>'product/exportPdf', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', 'データ取得', array('class'=>"btn btn-primary")) ?>
        </div>
      </div>
    <?= Form::close() ?>

<h3>メールを送信する。</h3>
    <?= Form::open(array('action'=>'product/mail', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
        </div>
      </div>
    <?= Form::close() ?>


<h3>売上サマリ取得</h3>
    <?= Form::open(array('action'=>'sale/exportSummary', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
        </div>
      </div>
    <?= Form::close() ?>


  </div>
