<?php

class Photo
{
    public function setPath($photoPath)
    {
        $connexion = Database::getInstance();
        $querry = "INSERT INTO photos (albumid, path) VALUES ('2', '$photoPath');";
        $result = mysqli_query($connexion::$connexion, $querry) or die();
        if (mysqli_affected_rows($connexion::$connexion) > 0) {
            return true;
        } else return false;
    }
}
