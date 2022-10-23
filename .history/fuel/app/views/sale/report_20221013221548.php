<h1>月次レポート</h1>

<?= Form::open('product/signup') ?>


  <div class="form-group">
    <?= Form::label('会社名', 'company_id') ?>
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
    <?php endif ?>
  </div>

  <div class="form-group"> 
    <?= Form::submit('', '送信', array('class'=>"btn btn-primary")) ?>
  </div>
<?= Form::close() ?>