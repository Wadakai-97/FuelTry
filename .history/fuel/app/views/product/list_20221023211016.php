<h3>CSVデータを取得する。</h3>
    <?= Form::open(array('action'=>'product/exportCsv', 'class'=>'form-inline text-center center-block')) ?>
      <div class=”form-row“>
        <div class="form-group col-auto">
          <?= Form::submit('', '取得', array('class'=>"btn btn-primary")) ?>
        </div>
      </div>
    <?= Form::close() ?>

<?php echo 

<h3>商品一覧</h3>
    <?= Form::open(array('action'=>'product/search', 'class'=>'form-inline text-center center-block')) ?>
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

  <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>商品名</th>
        <th>販売価格（円）</th>
        <th>会社名</th>
        <th colspan=2></th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach($products as $key => $product) {
      echo '<tr><td>' . $product['id'] . '</td>' .
            '<td>' . $product['name'] . '</td>' .
            '<td>' .  number_format($product['price']) . '</td>' .
            '<td>' . $product['company_name'] . '</td>' .
            '<td>' .  Form::open('product/detail/' . $product['id']) . 
                        Form::submit('', '詳細') . 
                      Form::close() .
            '</td>' .
            '<td>' .  Form::open('product/delete/' . $product['id']) . 
                        Form::submit('', '削除') . 
                      Form::close() .
            '</td></tr>';
      }
    ?>
    </tbody>
  </table>

  <div class="text-center">
    <div class="pagination text-center">
      <?php echo Pagination::instance('mypagination')->render(); ?>
    </div>
  </div>


  </div>
