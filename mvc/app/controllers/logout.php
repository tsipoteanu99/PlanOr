<?php

class Logout extends Controller
{
    public function index($name = '')
    {
        session_start();
        session_destroy();
        $this->view('login/login');
    }
}
