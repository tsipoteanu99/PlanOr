<?php
class Doc extends Controller
{
    public function index($name = '')
    {

        $this->view('doc/index');
    }
}
