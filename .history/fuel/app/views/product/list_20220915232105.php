<h1>商品一覧画面</h1>

<h3><?php echo $subtitle; ?></h3>
<p><?php echo $contents; ?></p>

<p>商品登録</p>
<?= Form::open('product/signup') ?>
  <?= Form::label('商品名', 'name') ?>
  <?= Form::input('name') ?>

  <?= Form::label('販売価格', 'price') ?>
  <?= Form::input('price') ?> 

  <?= Form::label('会社名', 'company_id') ?>
  <?= Form::input('company_id') ?> 

  <?= Form::submit('', '送信') ?>
<?= Form::close() ?>