<?php
class Views
{
    public function Render($controller, $view)
    {
        $array = explode("Controller", $controller);
        $controller = $array[0];
        //echo $controller;
        require VIEWS . DFT . "head.php";
        require VIEWS . $controller . "/" . $view . ".php";
        require VIEWS . DFT . "footer.php";
    }
}
