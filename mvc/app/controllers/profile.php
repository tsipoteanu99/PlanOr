<?php

class Profile extends Controller
{
    public function index($name = '')
    {

        $this->view('profile/index');
    }

    public function album($name = '')
    {

        $this->view('profile/album');
    }

    public function picturePage($name = '')
    {

        $this->view('profile/picturePage');
    }
}
