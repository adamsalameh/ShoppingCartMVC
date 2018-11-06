<?php

class Controller{
    
    protected function renderView(string $view_name,$data){
       // include('Views/header.php');
        include('Views/'.$view_name.'.php');
        //include('Views/footer.php');
    }
    
}
?>
