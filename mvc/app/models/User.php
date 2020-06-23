<?php

class User
{
   private $username;
   private $id;
   private $email;
   private $picture;
   private $admin;
   private $firstName;
   public $lastName;

   public function checkIfValid($username, $password)
   {
      $connexion = Database::getInstance();
      $querry = "SELECT * FROM USERS WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($connexion::$connexion, $querry) or die();
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
         $this->username = $username;
         session_start();
         $_SESSION['user'] = $username;
         return true;
      } else return false;
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

   public function setData()
   {
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
            $_SESSION['id'] = $this->id;
            $_SESSION['picture'] = $this->picture;
            $_SESSION['email'] = $this->email;
            $_SESSION['admin'] = $this->admin;
            $_SESSION['firstName'] = $this->firstName;
            $_SESSION['lastName'] = $this->lastName;
         }
      }
   }

   public function existsUsername($username){
      $connexion = Database::getInstance();
      $testQuerryUser = "SELECT username FROM users WHERE username='$username';";
      $firstTest = mysqli_query($connexion::$connexion, $testQuerryUser) or die();
      $firstTestCheck = mysqli_num_rows($firstTest); 
      if($firstTestCheck>0) return false;
      else return true;
   }

   public function existsMail($mail){
      $connexion = Database::getInstance();
      $testQuerryMail = "SELECT email FROM users WHERE email='$mail';";
      $secondTest = mysqli_query($connexion::$connexion, $testQuerryMail) or die();
      $secondTestCheck = mysqli_num_rows($secondTest); 
      if($secondTestCheck>0) return false;
      else return true;
   }

   public function createAccount($username, $password, $mail, $first, $last)
   {
      $connexion = Database::getInstance();

      $querry = "INSERT INTO users (username, password, email, first_name, last_name) VALUES ('$username', '$password', '$mail', '$first', '$last');";
      $result = mysqli_query($connexion::$connexion, $querry) or die();
      if (mysqli_affected_rows($connexion::$connexion) > 0){
         return true;
      } 
      else return false;
   }


   public function addName($first, $last, $userId){
      $connexion = Database::getInstance();

      $query = "UPDATE users SET first_name = '$first', last_name = '$last' WHERE id = '$userId'";
      $result = mysqli_query($connexion::$connexion, $query) or die();
      if(mysqli_affected_rows($connexion::$connexion) > 0) return true;
      return false;
   }

   public function checkIfPasswordIsValid($userId, $pass){
      $connexion = Database::getInstance();

      $query = "SELECT password FROM users WHERE id='$userId';";
      $result = mysqli_query($connexion::$connexion, $query) or die();
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
            if($row['password'] == $pass) return true;
        }
      }
      return false;
   }


   public function changePassword($new, $userId){
      $connexion = Database::getInstance();

      $query = "UPDATE users SET password = '$new' WHERE id = '$userId'";
      $result = mysqli_query($connexion::$connexion, $query) or die();
      if(mysqli_affected_rows($connexion::$connexion) > 0) return true;
      return false;
   }

   public function changeMail($new, $userId){
      $connexion = Database::getInstance();

      $query = "UPDATE users SET email = '$new' WHERE id = '$userId'";
      $result = mysqli_query($connexion::$connexion, $query) or die();
      if(mysqli_affected_rows($connexion::$connexion) > 0) return true;
      return false;
   }
}
