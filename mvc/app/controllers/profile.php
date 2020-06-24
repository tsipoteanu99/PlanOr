<?php
session_start();
class Profile extends Controller
{
    private $albums;
    private $albumsCount;
    private $photosCount;
    private $photos;
    private $currentAlbumId;

    public function index()
    {
        $likeCount;
        $userAlbums = $this->model('Album');
        $this->albumsCount = $userAlbums->getAlbumsCount($_SESSION['id']);
        if ($this->albumsCount > 0){
            $this->albums = $userAlbums->getUserAlbums($_SESSION['id']);
            $user = $this->model('User');
            $likeCount = $user->getLikes($_SESSION['id']);
            $photoCount = $user->getPhotos($_SESSION['id']);
            $albumCount = $user->getAlbums($_SESSION['id']);
        }
        $this->view(
            'profile/index',
            [
                'username' => $_SESSION['user'],
                'email' => $_SESSION['email'],
                'lastName' => $_SESSION['lastName'],
                'likeCount' => $likeCount,
                'photoCount' => $photoCount,
                'albumCount' => $albumCount,
                'firstName' => $_SESSION['firstName'],
                'picture' => $_SESSION['picture'],
                'albums' => $this->albums,
                'count' => $this->albumsCount,
            ]
        );
    }

    public function newAlbum()
    {
        $albumName = isset($_POST['newAlbum']) ? $_POST['newAlbum'] : '';
        $ok = true;

        if (!isset($albumName) || empty($albumName)) {
            $ok = false;
            $message = 'Invalid album name!';
        }

        if ($ok) {
            $album = $this->model('Album');
            $album->createAlbum($albumName, $_SESSION['id']);
            $message = 'Album succesfully created!';
        }

        echo json_encode(
            array(
                'ok' => $ok,
                'message' => $message
            )
        );
    }

    public function newTag($alId)
    {

        $tagName = isset($_POST['addTag']) ? $_POST['addTag'] : '';
        $ok = true;

        if (!isset($tagName) || empty($tagName)) {
            $ok = false;
            $message = 'Invalid tag name!';
        }

        if ($ok) {
            $album = $this->model('Album');
            $album->addNewTagToAlbum($tagName, $alId);
            $message = 'Tag succesfully added!';
        }

        echo json_encode(
            array(
                'ok' => $ok,
                'message' => $message
            )
        );
    }

    public function albumPhotos($name = '')
    {
        $uri = $_SERVER['REQUEST_URI'];
        $id = explode('=', $uri);
        $newPhoto = $this->model('Photo');
        $album = $this->model('Album');
        if ($album->getAlbumTags($id[2]) !== null) {
            $tags = $album->getAlbumTags($id[2]);
        } else $tags['name'][0] = "No tags to show";
        $this->photosCount = $newPhoto->getPhotosCount($id[2]);
        if ($this->photosCount > 0)
            $this->photos = $newPhoto->getPhotosByAlbumId($id[2]);
        $this->view('profile/albumPhotos', [
            'test' => $id[2],
            'photo' => $this->photos,
            'count' => $this->photosCount,
            'tags'  => $tags
        ]);
    }

    public function uploadPhoto($alId)
    {
        $ok = true;
        $messages = array();


        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];

            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];


            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1500000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/mvc/public/uploads/' . $fileNameNew;
                        $newPhoto = $this->model('Photo');
                        $newPhoto->setPath($fileNameNew, $alId);
                        $count = $newPhoto->getPhotosCount($alId);
                        if ($count > 0)
                            $renderPhotos = $newPhoto->getPhotosByAlbumId($alId);

                        move_uploaded_file($fileTmpName, $fileDestination);
                        $ok = true;
                        $messages[] = "Succes uploading photo!";
                        header("LOCATION: http://localhost/mvc/public/?url=profile/albumPhotos/?id=" . $alId);
                        $this->view('profile/albumPhotos', [
                            'test' => $alId,
                            'photo' => $this->photos,
                            'count' => $this->photosCount
                        ]);
                    } else {
                        $ok = false;
                        $messages[] = "Picture size too big!";
                    }
                } else {
                    $ok = false;
                    $messages[] = "Error uploading photo!";
                }
            }
            if (!$ok)
                $messages[] = "Can't upload photos with this extension!";
        }
        json_encode(
            array(
                'ok' => $ok,
                'messages' => $messages,
            )
        );
    }


    public function picturePage($name = '')
    {
        $uri = $_SERVER['REQUEST_URI'];
        $id = explode('=', $uri);
<<<<<<< HEAD

        $photo = $this->model('Photo');
        $noLikes = $photo->getLikeCount($id[2]);

        $this->view('profile/picturePage', [
            'id' => $id[2],
            'likes' => $noLikes
        ]);
    }

    public function likeButtonPressed($photoId){
        $photo = $this->model('Photo');
        $userId = $_SESSION['id'];

        $checkIfLogged = $photo->checkIfCanLike($userId);
        if($checkIfLogged){
            $hasLikedBefore = $photo->checkIfInDatabase($photoId, $userId);
            if($hasLikedBefore){
                $likeId = $photo->getLikeId($photoId, $userId);
                $status = $photo->checkLikeStatus($photoId, $userId);
                
                $likePhoto = $photo->likePhoto($photoId, $userId, $status, $likeId);
            }
            else{
                $addLike = $photo->addLike($photoId, $userId);
            }
        }

        $noLikes = $photo->getLikeCount($photoId);

        header("LOCATION: http://localhost/mvc/public/?url=profile/picturePage/?id=" . $photoId);
        $this->view('profile/albumPhotos', [
            'id' => $photoId,
            'likes' => $noLikes
        ]);


=======
        $photo = $this->model('Photo');
        $photoInfo = $photo->getPhotoInfo($id[2]);
        $this->view('profile/picturePage', [
            'test' => $id[2],
            'path' => $photoInfo['path'],
            'desc' => $photoInfo['desc'],
            'likes' => $photoInfo['likes'],
        ]);
    }

    public function deletePhoto($id)
    {
        $photo = $this->model('Photo');
        $photo->deletePhoto($id);
>>>>>>> lastBranch
    }
}
