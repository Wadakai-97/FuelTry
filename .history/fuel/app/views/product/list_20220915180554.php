<h1>商品一覧画面</h1>

<h3><?php echo $subtitle; ?></h3>
<p><?php echo $contents; ?></p>

<table>
  <thead>商品登録フォーム</thead>
  <tbody>
    <?= Form::open('product/signup') ?>
      <tr>
        <?= Form::label('商品名', 'product_name') ?>
        <?= Form::input('product_name') ?>
      </tr>
      <tr>
        <?= Form::label('販売価格') ?>
        <?= Form::input('price') ?> 
      </tr>
    </tbody>
    <?= Form::submit('', '送信') ?>

  <?= Form::close() ?>
</table>