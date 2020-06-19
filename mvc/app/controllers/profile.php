<?php
session_start();
class Profile extends Controller
{
    private $albums;
    private $albumsCount;

    public function index()
    {
        $userAlbums = $this->model('Album');
        $this->albums = $userAlbums->getUserAlbums($_SESSION['id']);
        $this->albumsCount = $userAlbums->getAlbumsCount($_SESSION['id']);
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

    public function album($name = '')
    {

        $this->view('profile/album');
    }

    public function picturePage($name = '')
    {

        $this->view('profile/picturePage');
    }
}
