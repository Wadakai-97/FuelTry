<h1>商品一覧画面</h1>

<h3><?php echo $subtitle; ?></h3>
<p><?php echo $contents; ?></p>

<table>
  <thead>商品登録フォーム</thead>
  <tbody>
    <tr>
    <?= Form::label('商品名', 'product_name') ?>
    <?= Form::input('product_name') ?>
    </tr>
    <tr></tr>
  </tbody>
</table>
<?= Form::open('product/signup') ?>

  <?= Form::submit('', '送信') ?>

<?= Form::close() ?>