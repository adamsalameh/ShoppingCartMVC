<?php

include_once 'Controllers/Controller.php';
include_once 'Controllers/ProductController.php';
include_once 'Models/Product.php';
include_once 'DTO/ProductDTO.php';


$url = isset($_SERVER['REQUEST_URI']) ? explode('/', ltrim($_SERVER['REQUEST_URI'],'/')) : '/';
$root_App = $url[0];
$controller = $url[1]??'product'?:'product';
$action = $url[2]??'index';
$param = $url[3]??null;
//echo $param;
echo "hello hello";

$controller_name = ucfirst($controller);
$controller = $controller_name.'Controller';

if (!class_exists($controller)){
    
    throw new Exception ("no controller");
}

$controller_obj = new $controller($controller_name);
$controller_obj->$action($param);


?>