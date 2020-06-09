<?php


class Database
{

    public static $instance;
    public static $connexion;
    public static $host = 'localhost';
    public static $user = 'admin';
    public static $pass = 'admin';
    public static $db = 'planor';



    public static function getInstance()
    {
        if (!isset(Database::$instance))
            Database::$instance = new Database();

        return Database::$instance;
    }

    private function __construct()
    {
        $conn = new mysqli(self::$host, self::$user, self::$pass, self::$db);
        self::$connexion = $conn;
        if ($conn) {
            echo 'Connected successfully. <br>';
        } else
            echo 'Couldn\'t connect to database' . self::$db;
    }

    public function printUsers()
    {
        $querry = 'SELECT * FROM USERS';
        $result = mysqli_query(self::$connexion, $querry);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['id'] . " " . $row['username'] . " " . $row['email'] . " " . $row['password'] . "<br>";
            }
        }
    }
}
