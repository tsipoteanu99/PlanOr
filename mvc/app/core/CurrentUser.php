<?php


class CurrentUser
{

    public static $instance;
    public $id;

    public function getInstance(){
        if (isset(CurrentUser::$instance))
            return CurrenUser::$instance;
    }

    function __construct($id){
        $this->id = $id;
    }

    public function createInstance($id)
    {
        if (isset(CurrentUser::$instance))
            return CurrentUser::$instance;
        else{
            CurrentUser::$instance = new CurrentUser($id);
            return CurrentUser::$instance;
        }
    }
}
