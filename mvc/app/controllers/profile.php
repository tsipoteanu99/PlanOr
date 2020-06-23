<?php
session_start();
class Profile extends Controller
{
    private $albums;
    private $albumsCount;

    public function index()
    {
        $userAlbums = $this->model('Album');
        $this->albumsCount = $userAlbums->getAlbumsCount($_SESSION['id']);
        if ($this->albumsCount > 0)
            $this->albums = $userAlbums->getUserAlbums($_SESSION['id']);
        $this->view(
            'profile/index',
            [
                'username' => $_SESSION['user'],
                'email' => $_SESSION['email'],
                'lastName' => $_SESSION['lastName'],
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

    public function albumPhotos($name = '')
    {
        $uri = $_SERVER['REQUEST_URI'];
        $id = explode('=', $uri);
        echo $id[2];


        $this->view('profile/albumPhotos', ['test' => $id[2]]);
    }

    public function uploadPhoto()
    {
        $ok = true;
        $messages = array();
        $uri = $_SERVER['REQUEST_URI'];
        $id = explode('=', $uri);

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
                    if ($fileSize < 500000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/mvc/public/uploads/' . $fileNameNew;
                        $newPhoto = $this->model('Photo');
                        $newPhoto->setPath($fileNameNew);
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $ok = true;
                        $messages[] = "Succes uploading photo!";
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
        echo json_encode(
            array(
                'ok' => $ok,
                'messages' => $messages,
            )
        );
    }


    public function picturePage($name = '')
    {

        $this->view('profile/picturePage');
    }
}
