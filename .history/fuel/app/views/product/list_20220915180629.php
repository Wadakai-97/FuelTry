<h1>商品一覧画面</h1>

<h3><?php echo $subtitle; ?></h3>
<p><?php echo $contents; ?></p>


<?= Form::open('product/signup') ?>
<?= Form::label('商品名', 'product_name') ?>
<?= Form::input('product_name') ?>
<?= Form::label('販売価格') ?>
<?= Form::input('price') ?> 
<?= Form::submit('', '送信') ?>
<?= Form::close() ?>