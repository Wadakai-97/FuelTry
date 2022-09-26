<h3>ログアウト画面</h3>

<p>現在、あなたは下記のアカウントにてログインしています。</p>

【ユーザー名】<?php echo $login_name ?>
【メールアドレス】<?php echo $login_email ?>

<?= Form::open('user/logout') ?>
    <?= Form::submit('', 'ログアウト', array('class'=>"btn btn-primary")) ?>
<?= Form::close() ?>

<button><?php echo Html::anchor('product/list', 'ホームに戻る', array('class'=>'nav-link')); ?></button>