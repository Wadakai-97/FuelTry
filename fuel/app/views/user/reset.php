<p>パスワードをリセットしたいアカウントのメールアドレスを入力してください。</p>

<?php if( ! empty($error_message)): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo $error_message; ?>
  </div>
<?php endif ?>

<?= Form::open('user/resetmail') ?>
  <div class="form-group">
    <?= Form::label('メールアドレス', 'email') ?>
    <?php if( !empty($errors['email'])): ?>
      <div class="form-group has-error endif">
      <?= Form::input('email', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）sample@gmail.com")) ?> 
      <span class="help-block"><?php echo $errors['email'] ?></span>
      </div>
    <?php endif ?>
    <?php if( empty($errors['email'])): ?>
      <?= Form::input('email', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）sample@gmail.com")) ?> 
    <?php endif ?>
  </div>

  <div class="form-group"> 
    <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>