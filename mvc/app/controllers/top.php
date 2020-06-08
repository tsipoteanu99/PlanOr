<?php

class Top extends Controller
{
    public function index($name = '')
    {

        $this->view('top/index');
    }
}
