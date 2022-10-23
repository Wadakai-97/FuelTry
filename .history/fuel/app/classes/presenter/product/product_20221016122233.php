<?php
class Presenter_Product extends Presenter
{
	public function view()
	{
		$this->name = $this->request()->param('name', 'World');
	}
}
