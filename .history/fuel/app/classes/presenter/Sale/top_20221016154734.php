<?php
class Presenter_Sale_Top extends Presenter
{
	public function view()
	{
        $this->result = '成功しました。';
	}

    public function sum() {
        $this->result = '合計値';
        $this->template->header = View::forge('layout/header');
        $this->template->footer = View::forge('layout/footer');
        $this->template->content = View::forge('sale/top');
    }
}
