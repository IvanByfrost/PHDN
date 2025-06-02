<?php
class Controller {
    protected $view;
    protected $model;

    public function __construct(){
        $this-> view = new Views();
        $this ->loadClassModel();
    }
    
    public function loadClassModel(){
        $class = get_class($this);
        $array = explode("Controller", $class);
        $model = $array[0]."_model";
        $path = "Models/".$model.".php";
        if (file_exists($path)) {
            require $path;
            $this-> model = new $model();
        } else {
            $this-> model = null;
        }
    }

}