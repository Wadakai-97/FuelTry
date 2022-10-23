<?php
class Presenter_Product_Sample extends Presenter
{
	public function top()
	{
    $this->template->header = View::forge('layout/header');
    $this->template->footer = View::forge('layout/footer');
		$this->template->content = View::forge('sale/test');
	}
}
