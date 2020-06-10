<?php

class Login extends Controller
{
    public function index($name = '')
    {
        $this->view('login/login');
    }

    public function checkValidity()
    {
        $username = $_POST['username'];
        $pass = $_POST["password"];

        if (!is_null($username) and !is_null($pass)) {
            $user = $this->model('User');
            $isValid = $user->checkIfValid($username, $pass);

            if ($isValid) {
                echo "it worked";
                $this->view('profile/index');
            } else $this->view("login/login");
        }
    }
}
