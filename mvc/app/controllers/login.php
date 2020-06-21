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
        $errors = array();
        
        if(strlen($pass) == 0 or strlen($username) == 0){
            $ok = false;
            $errors[] = 'Both username and password fields cannot be empty!';
        }

        else{
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
                $errors[] = 'Your username and password combination is incorrect!';
            }
        }

        echo json_encode(
            array(
                'ok' => $ok,
                'errors' => $errors
            )
        );
    }
}
