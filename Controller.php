<?php

//namespace Controllers;
include_once 'Models/Model.php';


class Controller{
    
     private $model;
   // private $data= [];
    
    protected function renderView(string $view_name,$data){
       // include('Views/header.php');
        include('Views/'.$view_name.'.php');
        //include('Views/footer.php');
    }
    
}

?>