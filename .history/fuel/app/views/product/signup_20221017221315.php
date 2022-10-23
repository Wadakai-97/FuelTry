<h3>商品新規登録</h3>

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

<?= Form::open('product/signup') ?>
  <div class="form-group">
    <?= Form::label('商品名', 'name') ?>      
    <?php if( !empty($errors['name'])): ?>
      <div class="form-group has-error endif">
      <?= Form::input('name', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）コカコーラ")) ?>
      <span class="help-block"><?php echo $errors['name'] ?></span>
    <?php endif ?>
    <?php if( empty($errors['name'])): ?>
      <?= Form::input('name', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）コカコーラ")) ?>
    <?php endif ?>
  </div>

  <div class="form-group">
    <?= Form::label('販売価格（円）', 'price') ?>
    <?php if( !empty($errors['price'])): ?>
      <div class="form-group has-error endif">
      <?= Form::input('price', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
      <span class="help-block"><?php echo $errors['price'] ?></span>
    <?php endif ?>
    <?php if( empty($errors['price'])): ?>
      <?= Form::input('price', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
    <?php endif ?>
  </div>

  <div class="form-group">
    <?= Form::label('会社名', 'company_id') ?>
    <?php if( !empty($errors['company_id'])): ?>
      <div class="form-group has-error endif">
      <?= Form::input('company_id', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
      <span class="help-block"><?php echo $errors['company_id'] ?></span>
    <?php endif ?>
    <?php if( empty($errors['company_id'])): ?>
      <?= Form::input('company_id', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）9999")) ?> 
    <?php endif ?>
    <?php endif ?>
  </div>

  <div class="form-group"> 
    <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>

<?php if( !empty($errors['company_id'])): ?>
      <div class="form-group has-error endif">
      <?php echo '<select name="company_id" class="form-control" id="txt-search" placeholder="例）11"><option value="" selected>未選択</option>'?>
      <?php 
            foreach($companies as $company) {
              echo '<option name="company_id" value="' . $company['id'] . '">' . $company['company_name'] . '</option>';
            }
      ?> 
      <span class="help-block"><?php echo $errors['company_id'] ?></span>
    <?php endif ?>
    <?php if( empty($errors['company_id'])): ?>
      <?php echo '<select name="company_id" class="form-control" id="txt-search" placeholder="例）11"><option value="" selected>未選択</option>'?>
      <?php 
            foreach($companies as $company) {
              echo '<option name="company_id" value="' . $company['id'] . '">' . $company['company_name'] . '</option>';
            }
      ?> 