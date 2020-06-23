<?php

class Photo
{
    public function setPath($photoPath, $albumId)
    {
        $connexion = Database::getInstance();
        $querry = "INSERT INTO photos (albumid, path) VALUES ('$albumId', '$photoPath');";
        $result = mysqli_query($connexion::$connexion, $querry) or die();
        if (mysqli_affected_rows($connexion::$connexion) > 0) {
            return true;
        } else return false;
    }

    public function getPhotosByAlbumId($albumId)
    {

        $connexion = Database::getInstance();
        $query = "SELECT * from photos where albumid=$albumId";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            for ($i = 0; $i < $resultCheck; $i++) {
                $row = mysqli_fetch_assoc($result);
                $photos['path'][$i] = $row['path'];
                $photos['likes'][$i] = $row['likes'];
            }
        }

        return $photos;
    }

    public function getPhotosCount($albumId)
    {
        $connexion = Database::getInstance();
        $query = "SELECT count(id) as count from photos where albumid=$albumId";
        $result = mysqli_query($connexion::$connexion, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        return $count;
    }
}
