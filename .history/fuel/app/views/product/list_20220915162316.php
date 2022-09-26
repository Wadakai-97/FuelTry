<h1>商品一覧画面</h1>

<h3><?php echo $subtitle; ?></h3>
<p><?php echo $contents; ?></p>

<p>商品登録</p>
<?= Form::open('product/signup') ?>
  
<?= Form::close() ?>