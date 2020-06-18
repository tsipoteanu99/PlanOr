<?php
session_start();
class Profile extends Controller
{

    public function index($name = '')
    {

        $this->view(
            'profile/index',
            [
                'username' => $_SESSION['user'],
                'email' => $_SESSION['email'],
                'lastName' => $_SESSION['lastName'],
                'firstName' => $_SESSION['firstName'],
                'picture' => $_SESSION['picture'],
            ]
        );
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getPicture()
    {
        return $this->picture;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getAdmin()
    {
        return $this->admin;
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
