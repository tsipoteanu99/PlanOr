<?php

class Album
{
    private $id;
    private $userId;
    private $name;

    public function createAlbum($username, $userId)
    {
        $connexion = Database::getInstance();
        $querry = "INSERT INTO albums (name, userid) VALUES ('$username', '$userId');";
        mysqli_query($connexion::$connexion, $querry);
        if (mysqli_affected_rows($connexion::$connexion) > 0) {
            return true;
        } else return false;
    }

    public function getUserAlbums($userId)
    {
        $connexion = Database::getInstance();
        $query = "SELECT * from albums where userid=2";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            for ($i = 0; $i < $resultCheck; $i++) {
                $row = mysqli_fetch_assoc($result);
                $album['id'][$i] = $row['id'];
                $album['userId'][$i] = $row['userid'];
                $album['name'][$i] = $row['name'];
            }
        }
        return $album;
    }

    public function getAlbumsCount($userId)
    {
        $connexion = Database::getInstance();
        $query = "SELECT count(id) as count from albums where userid=$userId";
        $result = mysqli_query($connexion::$connexion, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        return $count;
    }
}