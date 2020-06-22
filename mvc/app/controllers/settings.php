<?php
session_start();
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

    public function addName(){
        $first = $_POST['first'];
        $last = $_POST["last"];

        $ok = true;
        $messages = array();

        $user = $this->model('User');
        $userId = $_SESSION['id'];

        $addName = $user->addName($first, $last, $userId);
        if($addName){
            $ok = true;
            $messages[] = "Action was succesfull!";
        }

        $_SESSION['firstName'] = $first;
        $_SESSION['lastName'] = $last;

        echo json_encode(
            array(
                'ok' => $ok,
                'messages' => $messages
            )
        );

    }

    public function changeMail(){
        $changePasswordData = array();
        $method = $_SERVER['REQUEST_METHOD']; 
        $ok = true;
        $errors = array();
        

        //Do not allow any method besides put
        if ('PUT' !== $method) {
            $ok = false;
            $errors[] = "Method not allowed!";
           echo json_encode(
            array(
                'ok' => $ok,
                'errors' => $errors
                )
            );
        return ;
        }
        parse_str(file_get_contents('php://input'), $changePasswordData);

        $mail = $changePasswordData['mail'] ?? ""; //In case mail is not defined, assign empty string
        $confirm = $changePasswordData['confirm'] ?? "";
        $pass = $changePasswordData['pass'] ?? "";

        $user = $this->model('User');
        $userId = $_SESSION['id'];
        $canProceed = true;
        $passwordIsValid = $user->checkIfPasswordIsValid($userId, $pass);

        if(!$passwordIsValid){
            $ok = false;
            $errors[] = "The password doesn't match!";
            $canProceed = false;
        }

        if($mail!=$confirm){
            $ok = false;
            $errors[] = "The e-mail values are different!";
            $canProceed = false;
        }

        if($canProceed){
            $changePass = $user->changeMail($mail, $userId);
            if($changePass){
                $ok = true;
                $errors[] = "Your e-mail address has been succesfully changed!";
            }
            else{
                $ok = false;
                $errors[] = "Database error!";
            }
        }


        echo json_encode(
            array(
                'ok' => $ok,
                'errors' => $errors
            )
        );

    }

    public function changePassword(){


        $changePasswordData = array();
        $method = $_SERVER['REQUEST_METHOD']; 
        $ok = true;
        $errors = array();
        

        //Do not allow any method besides put
        if ('PUT' !== $method) {
            $ok = false;
            $errors[] = "Method not allowed!";
           echo json_encode(
            array(
                'ok' => $ok,
                'errors' => $errors
                )
            );
        return ;
        }
        parse_str(file_get_contents('php://input'), $changePasswordData);

        $current = $changePasswordData['current'] ?? ""; //In case current is not defined, assign empty string
        $new = $changePasswordData['newpass'] ?? "";
        $confirm = $changePasswordData['confirm'] ?? "";

        

        if(strlen($current) < 4 or strlen($new) < 4 or strlen($confirm) < 4){
            $ok = false;
            $errors[] = 'All 3 fields must have at least 4 characters!';
        }

        if($ok){
            $user = $this->model('User');
            $userId = $_SESSION['id'];
            $canProceed = true;
            $passwordIsValid = $user->checkIfPasswordIsValid($userId, $current);

            if(!$passwordIsValid){
                $ok = false;
                $errors[] = "The current passwords don't match!";
                $canProceed = false;
            }

            if($new!=$confirm){
                $ok = false;
                $errors[] = "The new password doesn't match with it's confirmation!";
                $canProceed = false;
            }

            if($canProceed){
                $changePass = $user->changePassword($new, $userId);
                if($changePass){
                    $ok = true;
                    $errors[] = "Your password has been succesfully changed!";
                }
                else{
                    $ok = false;
                    $errors[] = "Database error!";
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

    public function confirmation($name = '')
    {
        $this->view('settings/confirmation');
    }
}
