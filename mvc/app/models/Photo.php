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
                $photos['id'][$i] = $row['id'];
                $photos['likes'][$i] = $row['likes'];
                $photos['id'][$i] = $row['id'];
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


    public function getLikeCount($photoId)
    {
        $connexion = Database::getInstance();
        $query = "SELECT likes from photos where id='$photoId'";
    }
    public function getPhotoInfo($id)
    {
        $connexion = Database::getInstance();
        $query = "SELECT * from photos where id=$id";
        $result = mysqli_query($connexion::$connexion, $query);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
            $photo['likes'] = $row['likes'];
            $photo['desc'] = $row['description'];
            $photo['path'] = $row['path'];
        }

        return $photo;
    }


    public function checkIfInDatabase($photoId, $userId)
    {
        $connexion = Database::getInstance();

        $query = "SELECT status FROM likes WHERE photoid='$photoId' AND userid='$userId';";
        $checkStatus = mysqli_query($connexion::$connexion, $query) or die();
        $checkStatusCheck = mysqli_num_rows($checkStatus);
        if ($checkStatusCheck > 0) return true;
        else return false;
    }


    public function checkLikeStatus($photoId, $userId)
    {
        $connexion = Database::getInstance();

        $query = "SELECT status FROM likes WHERE photoid='$photoId' AND userid='$userId';";
        $checkStatus = mysqli_query($connexion::$connexion, $query) or die();
        $checkStatusCheck = mysqli_num_rows($checkStatus);
        if ($checkStatusCheck > 0) {
            $row = mysqli_fetch_assoc($checkStatus);
            if ($row['status'] == 1) return 1;
            else return 0;
        }
    }

    public function checkIfCanLike($userId)
    {
        if ($userId == 0 or is_null($userId)) return false;
        return true;
    }

    public function getLikeId($photoId, $userId)
    {
        $connexion = Database::getInstance();

        $query = "SELECT id FROM likes WHERE photoid='$photoId' AND userid='$userId';";
        $getId = mysqli_query($connexion::$connexion, $query) or die();
        $getIdCheck = mysqli_num_rows($getId);
        if ($getIdCheck > 0) {
            $row = mysqli_fetch_assoc($getId);
            return $row['id'];
        }
    }


    public function addLike($photoId, $userId)
    {
        $connexion = Database::getInstance();

        $query = "INSERT INTO likes (userid, photoid, status) VALUES ('$userId', '$photoId', 1);";
        $result = mysqli_query($connexion::$connexion, $query) or die();

        $query2 = "UPDATE photos SET likes = likes + 1 WHERE id='$photoId';";
        $result2 = mysqli_query($connexion::$connexion, $query2) or die();
    }

    public function likePhoto($photoId, $userId, $status, $likeId)
    {
        $connexion = Database::getInstance();


        if ($status == 0) {
            $query = "UPDATE likes SET status = 1 WHERE id = '$likeId'";
            $result = mysqli_query($connexion::$connexion, $query) or die();

            $query2 = "UPDATE photos SET likes = likes + 1 WHERE id='$photoId';";
            $result2 = mysqli_query($connexion::$connexion, $query2) or die();
        } else {
            $query = "UPDATE likes SET status = 0 WHERE id = '$likeId'";
            $result = mysqli_query($connexion::$connexion, $query) or die();

            $query2 = "UPDATE photos SET likes = likes - 1 WHERE id='$photoId';";
            $result2 = mysqli_query($connexion::$connexion, $query2) or die();
        }
    }

    public function deletePhoto($id)
    {
        $connexion = Database::getInstance();
        $query = "DELETE from photos where id=$id";
        mysqli_query($connexion::$connexion, $query);
    }
}
