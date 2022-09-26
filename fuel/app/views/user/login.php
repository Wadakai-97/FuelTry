<h3>ログイン画面</h3>

<?php if( ! empty($success_message)): ?>
  <div class="alert alert-success" role="alert">
      <?php echo $success_message; ?>
  </div>
<?php endif ?>
<?php if( ! empty($error_message)): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo $error_message; ?>
  </div>
<?php endif ?>

<?php echo Html::anchor('user/form', ' ユーザー登録はこちら'); ?>

<?= Form::open('user/login') ?>
  <div class="form-group">
    <?= Form::label('メールアドレス', 'email') ?>      
    <?php if( !empty($errors['email'])): ?>
      <div class="form-group has-error endif">
      <?= Form::input('email', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）sample@gmail.com")) ?>
      <span class="help-block"><?php echo $errors['email'] ?></span>
    <?php endif ?>
    <?php if( empty($errors['email'])): ?>
      <?= Form::input('email', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）sample@gmail.com")) ?>
    <?php endif ?>
  </div>

  <div class="form-group">
    <?= Form::label('パスワード', 'password') ?>
    <?php if( !empty($errors['password'])): ?>
      <div class="form-group has-error endif">
      <?= Form::password('password', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
      <span class="help-block"><?php echo $errors['password'] ?></span>
    <?php endif ?>
    <?php if( empty($errors['password'])): ?>
      <?= Form::password('password', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
    <?php endif ?>
  </div>

  <div class="form-group"> 
    <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>

<?php echo Html::anchor('user/resetform', ' パスワードを忘れた方はこちら'); ?>