<?php
class Presenter_Sale extends Presenter
{
	public function view()
	{
    $this->template->header = View::forge('layout/header');
    $this->template->footer = View::forge('layout/footer');
    $this->template->content = View::forge('sale/test');
	}
}
