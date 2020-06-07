<?php

class SearchUser extends Controller
{
    public function index($name = '')
    {

        $this->view('searchUser/index');
    }
}
