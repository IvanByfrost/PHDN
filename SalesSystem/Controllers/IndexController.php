<?php

class IndexController extends Controller{
    public function __construct()
    {
   //echo "Mi primer controlador";
   parent::__construct();      
    }
    public function Index(){
        $this -> view -> Render($this, "Index");
    }
}