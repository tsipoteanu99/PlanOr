<?php
session_start();
class Profile extends Controller
{
    private $username; // = $_SESSION['user'];
    private $id;
    private $email;
    private $picture;
    private $admin;
    private $firstName;
    private $lastName;

    public function __construct()
    {
        $this->username = $_SESSION['user'];
        $connexion = Database::getInstance();
        $querry = "SELECT * FROM USERS WHERE username ='$this->username'";
        $result = mysqli_query($connexion::$connexion, $querry) or die();
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->id = $row['id'];
                $this->picture = $row['picture'];
                $this->email = $row['email'];
                $this->admin = $row['admin'];
                $this->firstName = $row['first_name'];
                $this->lastName = $row['last_name'];
            }
        }
    }

    public function index($name = '')
    {

        $this->view(
            'profile/index',
            [
                'username' => $this->getUsername(),
                'email' => $this->getEmail(),
                'lastName' => $this->getLastName(),
                'firstName' => $this->getFirstName(),
                'picture' => $this->getPicture(),
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
