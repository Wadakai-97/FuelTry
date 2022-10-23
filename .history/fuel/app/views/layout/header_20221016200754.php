<nav class="navbar navbar-expand-lg navbar-dark / bg-dark">
  <?php echo Html::anchor('product/list', '商品管理システム', array('class'=>'navbar-brand')); ?>
    <ul class="navbar-nav">
    <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              商品
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php echo Html::anchor('product/form', '新規登録', array('class'=>'nav-link')); ?>
            <div class="dropdown-divider"></div>
            <?php echo Html::anchor('product/list', '一覧表示', array('class'=>'nav-link')); ?>
          </div>
      </li>
      <li class="nav-item">
        <?php echo Html::anchor('sale/list', '売上一覧', array('class'=>'nav-link')); ?>
      </li>
      <li class="nav-item">
        <?php echo Html::anchor('product/csv', 'CSV', array('class'=>'nav-link')); ?>
      </li>
      <li class="nav-item">
        <?php echo Html::anchor('user/top', 'ログイン/ ログアウト', array('class'=>'nav-link')); ?>
      </li>
      <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              販売会社
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php echo Html::anchor('company/form', '新規登録', array('class'=>'dropdown-item')); ?>
            <div class="dropdown-divider"></div>
            <?php echo Html::anchor('company/list', '会社一覧', array('class'=>'dropdown-item')); ?>
          </div>
      </li>
    </ul>
  </div>
</nav>