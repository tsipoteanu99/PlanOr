<?php

class Register extends Controller
{
    public function index($name = '')
    {

        $this->view('register/register');
    }

    public function registerForm()
    {
        $username = $_POST['username'];
        $pass = $_POST["password"];
        $mail = $_POST["email"];

        if (!is_null($username) and !is_null($pass) and !is_null($mail)) {
            $user = $this->model('User');
            $createAccount = $user->createAccount($username, $pass, $mail);

            if ($createAccount) {
                 $this->view('login/login');
            } else $this->view("register/register");
        }
    }
}
