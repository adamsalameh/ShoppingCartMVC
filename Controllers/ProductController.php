<?php

class ProductController extends Controller{
    
    
    public function __construct(){
        
            
    }
    
    public function viewAllProducts(){
      // $products = new Product();
       //$data = $products->getAll();
       $this->renderView("viewAllProducts", $data);
       //$product = new Product();
       //var_dump($product->getAll());      
    
    }
    
    public function deleteProduct($id){
       
        $product = new Product();
        $product->removeProduct($id);
        $param = $id. " is Deleted";
        $this->renderView(__FUNCTION__,$param);
    }
    
    public function editProduct($id){
       
        //$product = new Product();
        //$product->updateProduct($id);
        $param = $id;
        $this->renderView(__FUNCTION__,$param);
    }
    
    public function viewProduct($id){
            
       $param = $id;
       $this->renderView(__FUNCTION__,$param);
    }
    
    public function createNewProduct(){
        $param = "new";
       $this->renderView(__FUNCTION__,$param);    
    }
    
}
