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
        $query = "SELECT * from albums where userid=$userId";
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


    public function getAlbumsFromTag($tag)
    {
        $connexion = Database::getInstance();

        $output = array();
        $query = "SELECT * from tags where name = '$tag'";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            for ($i = 0; $i < $resultCheck; $i++) {
                $row = mysqli_fetch_assoc($result);
                $albumId = $row['albumid'];
                $query2 = "SELECT * from albums where id = '$albumId';";
                $resultAlbum = mysqli_query($connexion::$connexion, $query2);
                $rowAlbum = mysqli_fetch_assoc($resultAlbum);
                $output[] = $rowAlbum['name'];
            }
        }


        return $output;
    }

    public function getNumberOfLikesForAlbum($albumId)
    {
        $connexion = Database::getInstance();

        $sum = 0;
        $query = "SELECT likes from photos where albumid='$albumId';";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            for ($i = 0; $i < $resultCheck; $i++) {
                $row = mysqli_fetch_assoc($result);
                $sum = $sum + $row['likes'];
            }
        }

        return $sum;
    }

    public function getNumberOfPhotos($albumId)
    {
        $connexion = Database::getInstance();


        $query = "SELECT * from photos where albumid='$albumId';";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);
        return $resultCheck;
    }
    public function addNewTagToAlbum($tagName, $albumId)
    {
        $connexion = Database::getInstance();
        $tagQuerry = "INSERT INTO tags (albumid, name) VALUES ('$albumId', '$tagName')";
        mysqli_query($connexion::$connexion, $tagQuerry);
        if (mysqli_affected_rows($connexion::$connexion) > 0) {
            return true;
        } else return false;
    }

    public function getAlbumTags($id)
    {
        $connexion = Database::getInstance();
        $query = "SELECT * from tags where albumid = '$id'";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            for ($i = 0; $i < $resultCheck; $i++) {
                $row = mysqli_fetch_assoc($result);
                $tag['name'][$i] = $row['name'];
            }
            return $tag;
        }
    }
}
