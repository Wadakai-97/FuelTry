<h3>会社：新規登録</h3>

<?php if( ! empty($success_message)): ?>
  <div class="alert alert-success" role="alert">
      <?php echo $success_message; ?>
  </div>
<?php endif ?>

<div class="form-row">
  <?= Form::open('company/signup') ?>
    <div class="form-group col-auto">
      <?= Form::label('会社名', 'company_name') ?>
      <?= Form::input('company_name', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）株式会社コカコーラ")) ?>
    </div>

    <div class="form-group col-auto">
      <?= Form::label('住所', 'address') ?>
      <?= Form::input('address', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）東京都千代田区千代田１丁目１−１")) ?> 
    </div>

    <div class="form-group col-auto"> 
      <?= Form::submit('', '登録', array('class'=>"btn btn-primary")) ?>
    </div>
  <?= Form::close() ?>
</div>