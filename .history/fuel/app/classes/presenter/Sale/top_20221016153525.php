<?php
class Presenter_Sale_Top extends Presenter
{
	public function view()
	{
        $this->result = '成功しました。';
        $this->title = '';
	}

    public function sum() {
        $this->result = '合計値';
    }
}
