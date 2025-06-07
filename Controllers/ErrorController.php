<?php
class ErrorController extends Controller {
    public function __construct(){
        parent::__construct();
    }
    public function Error ($url){
        $this->view->Render($this,"error",$url);
    }
}
