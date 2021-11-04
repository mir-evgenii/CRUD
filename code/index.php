<?php

phpinfo();

function autoloadController($className) {
    $className = str_replace("..", "", $className);
    require_once("controllers/$className.php");
}

function autoloadModel($className) {
    $className = str_replace("..", "", $className);
    require_once("models/$className.php");
}



if ($GLOBALS['_GET'] != null) {
    $get = $GLOBALS["_GET"];
    if ($get['c'] != null) {
        $controller = $get['c'];
    }

    if ($get['m'] != null) {
        $method = $get['m'];
    }
}

$controller = $controller.'Controller';

spl_autoload_register('autoloadController');
$controller = new $controller;


$controller->$method();


