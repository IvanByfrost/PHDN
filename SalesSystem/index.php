<?php
/* $url = $_GET['url'] ?? 'Index/index';
echo $url; */

require 'config.php';
$controller = "";
$method = "";
$params = "";

$url = $_GET['url'] ?? 'Index/index';
$arrayUrl = explode('/', $url);
if (isset($arrayUrl[0])){
    $controller = $arrayUrl[0];
}

if (isset($arrayUrl[1])){
    if ($arrayUrl[1] !="") {
        $method = $arrayUrl[1];
    }
}

if (isset($arrayUrl[2])){
    if ($arrayUrl[2] !="") {
        $params = $arrayUrl[2];
    }
}

spl_autoload_register(function ($class) {
if(file_exists(LBS.$class.".php")) 
require LBS.$class.".php";
});
require 'Controllers/ErrorController.php';
$error = new ErrorController();
$controller = $controller."Controller";
$ControllersPath = "Controllers/".$controller.".php";
if (file_exists($ControllersPath)){
    require $ControllersPath;
    $controller = new $controller();
    if(isset($method)) {
        if (method_exists($controller, $method)) {
            if (isset($params)){
                $controller->{$method}($params);
            } else {
                $controller ->{$method}();
            } 
        } else {
            $error ->Error($url);
        } 
    }
} else {
    $error ->Error($url);
}

//echo $controller." ".$method." ".$params;

?>