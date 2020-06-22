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

        $this->view('profile/albumPhotos');
    }

    public function uploadPhoto()
    {
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];


            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 500000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'uploads/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);


                        echo "Succes uploading photo!";
                        $this->view('profile/albumPhotos');
                    } else {
                        echo "Picture size too big!";
                    }
                } else {
                    echo "Error uploading photo!";
                }
            } else {
                echo "Can't upload photos with this extension!";
            }
        }
    }

    public function picturePage($name = '')
    {

        $this->view('profile/picturePage');
    }
}
