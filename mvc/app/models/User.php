<?php

//require_once "../core/Database.php";

class User
{
   public $name;

   public function name()
   {
      return "tata";
   }

   public function checkIfValid($username, $password)
   {
      $connexion = Database::getInstance();
      $querry = "SELECT * FROM USERS WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($connexion, $querry) or die();
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) return true;
      else return false;
   }
}
