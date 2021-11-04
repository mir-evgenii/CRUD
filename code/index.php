<?php

function __autoload($className) {
    $className = str_replace("..", "", $className);
    require_once("controllers/$className.php");
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

$controller = new $controller;

$controller->$method();


