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
        
        $ok = false;

        if (!is_null($username) and !is_null($pass)) {
            $ok = true;
            $user = $this->model('User');
            $isValid = $user->checkIfValid($username, $pass);

            if ($isValid) {
                $ok = true;
                $user->setData();
                // $this->view(
                //     'profile/index',
                //     [
                //         'username' => $user->getUsername(),
                //         'email' => $user->getEmail(),
                //         'lastName' => $user->getLastName(),
                //         'firstName' => $user->getFirstName(),
                //         'picture' => $user->getPicture(),
                //     ]
                // );
            } else {
                $ok = false;
            }
        }

        echo json_encode(
            array(
                'ok' => $ok,
                'username' => $username
            )
        );
    }
}
