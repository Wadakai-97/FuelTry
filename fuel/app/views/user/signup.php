<h3>ユーザー登録</h3>

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

<?= Form::open('user/signup') ?>
  <div class="form-group">
    <?= Form::label('ユーザー名', 'name') ?>      
    <?php if( !empty($errors['name'])): ?>
      <div class="form-group has-error endif">
      <?= Form::input('name', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）山田太郎")) ?>
      <span class="help-block"><?php echo $errors['name'] ?></span>
      </div>
    <?php endif ?>
    <?php if( empty($errors['name'])): ?>
      <?= Form::input('name', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）山田太郎")) ?>
    <?php endif ?>
  </div>

  <div class="form-group">
    <?= Form::label('役職', 'position') ?>      
    <?php if( !empty($errors['position'])): ?>
      <div class="form-group has-error endif">
        <?= Form::radio('position', '1', array('id'=>"form_sales")) ?>
        <?= Form::label('営業部', 'sales') ?> 
        <?= Form::radio('position', '10', array('id'=>"form_management")) ?>
        <?= Form::label('管理部', 'management') ?> 
        <?= Form::radio('position', '100', array('id'=>"form_admin")) ?>
        <?= Form::label('代表取締役', 'admin') ?> 
      <span class="help-block"><?php echo $errors['position'] ?></span>
      </div>
    <?php endif ?>
    <?php if( empty($errors['position'])): ?>
      <div>
        <?= Form::radio('position', '1', array('id'=>"form_sales")) ?>
        <?= Form::label('営業部', 'sales') ?> 
        <?= Form::radio('position', '10', array('id'=>"form_management")) ?>
        <?= Form::label('管理部', 'management') ?> 
        <?= Form::radio('position', '100', array('id'=>"form_admin")) ?>
        <?= Form::label('代表取締役', 'admin') ?> 
      </div>
    <?php endif ?>
  </div>

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
    <?= Form::label('パスワード', 'password') ?>
    <?php if( !empty($errors['password'])): ?>
      <div class="form-group has-error endif">
      <?= Form::password('password', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
      <span class="help-block"><?php echo $errors['password'] ?></span>
      </div>
    <?php endif ?>
    <?php if( empty($errors['password'])): ?>
      <?= Form::password('password', '', array('id'=>"txt-search", 'class'=>"form-control")) ?> 
    <?php endif ?>
    <?= Form::label('パスワード(確認)', 'confirm') ?>
    <?php if( !empty($errors['confirm'])): ?>
      <div class="form-group has-error endif">
      <?= Form::password('confirm', '', array('id'=>"txt-search", 'class'=>"form-control", 'oninput'=>'passCheck(this)')) ?>
      <span class="help-block"><?php echo $errors['confirm'] ?></span>
      </div>
    <?php endif ?> 
    <?php if( empty($errors['confirm'])): ?>
      <?= Form::password('confirm', '', array('id'=>"txt-search", 'class'=>"form-control", 'oninput'=>'passCheck(this)')) ?>
    <?php endif ?>
  </div>

  <div class="form-group"> 
    <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>