<?php

class SearchAlbums extends Controller
{
    public function index($name = '')
    {


        $this->view('searchAlbums/index');
    }
}
