<h1>月次レポート</h1>

<?= Form::open('product/signup') ?>
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