<?php

class Controller_Layout extends Controller_Template
{
    public function before()
    {
        parent::before();
        $this->template->header = View::forge('layout/header');
        $this->template->footer = View::forge('layout/footer');
    }

    public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }
}
?>