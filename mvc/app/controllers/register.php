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
        $first = $_POST['first'];
        $last = $_POST['last'];

        $ok = true;
        $errors = array();

        if(strlen($username) < 4){
            $ok = false;
            $errors[] = 'Username must have at least 4 characters!';
        }

        if(strlen($pass) < 4){
            $ok = false;
            $errors[] = 'Password must have at least 4 characters!';
        }

        if(strlen($mail) <= 2){
            $ok = false;
            $errors[] = 'Mail must be valid!';
        }

        if(strlen($first) < 2){
            $ok = false;
            $errors[] = 'First name must have at least 2 letters!';
        }

        if(strlen($last) < 2){
            $ok = false;
            $errors[] = 'Last name must have at least 2 letters!';
        }
        
        if($ok) {
            if (!is_null($username) and !is_null($pass) and !is_null($mail) and !is_null($first) and !is_null($last)) {
                $user = $this->model('User');

                $verifyUsername = $user->existsUsername($username);
                $verifyMail = $user->existsMail($mail);
                $canProceed = true;

                if(!$verifyMail){
                    $ok = false;
                    $errors[] = "The Mail address is already in use!";
                    $canProceed = false;
                }

                if(!$verifyUsername){
                    $ok = false;
                    $errors[] = "The username is already taken!";
                    $canProceed = false;
                }

                if($canProceed){

                $createAccount = $user->createAccount($username, $pass, $mail, $first, $last);
                
                if (!$createAccount) {
                    $ok = false;
                    $errors[] = 'Database error!';
                } 
                else {
                    $ok = true;
                    $errors[] = 'Created the account!';
                } 
            }
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
