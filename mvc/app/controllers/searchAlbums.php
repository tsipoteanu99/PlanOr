<?php

class SearchAlbums extends Controller
{

    private $output;

    public function index($name = '')
    {
        $this->view('searchAlbums/index');
    }


    public function findAlbumFromTag(){
        $input = $_GET['input'];

        $album = $this->model('Album');
        $this->output = $album->getAlbumsFromTag($input);

        $this->view('searchAlbums/index',
                    [
                       'albums' => $this->output
                    ]);
    }
}
