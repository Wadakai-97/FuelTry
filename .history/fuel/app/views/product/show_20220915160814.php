<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "show" ); ?>'><?php echo Html::anchor('product/show','Show');?></li>

</ul>
<p>Show</p>

<h3>title:<?php echo Arr::get($subnav, "title"); ?></h3>
<p><?php echo contents; ?></p>