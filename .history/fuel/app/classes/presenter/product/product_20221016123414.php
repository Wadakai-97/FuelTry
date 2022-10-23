<?php
class Presenter_Product extends Presenter
{
	public function view()
	{
    $this->template->header = View::forge('layout/header');
    $this->template->footer = View::forge('layout/footer');
		$this->name = $this->request()->param('name', 'World');
	}
}
