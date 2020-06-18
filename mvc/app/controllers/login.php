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
                $user->setData();
                $this->view(
                    'profile/index',
                    [
                        'username' => $user->getUsername(),
                        'email' => $user->getEmail(),
                        'lastName' => $user->getLastName(),
                        'firstName' => $user->getFirstName(),
                        'picture' => $user->getPicture(),
                    ]
                );
            } else $this->view("login/login");
        }
    }
}
