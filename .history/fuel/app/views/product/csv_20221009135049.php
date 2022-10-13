<h3>すべてのデータを取得する画面</h3>
    <?= Form::open(array('action'=>'product/exportCsv', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto m-5">
          <?= Form::label('商品名', 'name') ?>
          <?= Form::input('name', '', array('id'=>"txt-search", 'class'=>"form-control", 'placeholder'=>"例）コカコーラ")) ?>
        </div>
        <div class="form-group col-auto">
          <?= Form::label('会社名', 'company_id') ?>
          <?php echo '<select name="company_id" class="form-control" id="txt-search" placeholder="例）11"><option value="" selected>未選択</option>'?>
          <?php 
            foreach($companies as $company) {
              echo '<option name="company_id" value="' . $company['id'] . '">' . $company['company_name'] . '</option>';
            }
          ?>
          <?php echo '</select>';?>
        </div>
        <div class="form-group col-auto">
          <?= Form::submit('', '検索', array('class'=>"btn btn-primary")) ?>
        </div>
        <?php if( ! empty($success_message)): ?>
          <div class="form-group col-auto">
            <?php echo Html::anchor('product/list', 'リセット', array('class'=>'btn btn-outline-secondary')); ?>
          </div>
        <?php endif ?>
      </div>
    <?= Form::close() ?>

    <?= Form::open(array('action'=>'product/exportCsv', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', 'データ取得', array('class'=>"btn btn-primary")) ?>
        </div>
      </div>
    <?= Form::close() ?>


  </div>
