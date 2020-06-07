<?php

class Settings extends Controller
{
    public function index($name = '')
    {

        $this->view('settings/index');
    }

    public function username($name = '')
    {

        $this->view('settings/username');
    }

    public function mail($name = '')
    {

        $this->view('settings/mail');
    }

    public function password($name = '')
    {
        $this->view('settings/password');
    }

    public function confirmation($name = '')
    {
        $this->view('settings/confirmation');
    }
}
