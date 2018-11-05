<?php

class ProductDTO{

    private $id;    
    private $productName;
    private $category;
    private $brand;
    private $description;
    private $color;
    private $price;
    private $quantity;
        
           
    // product setters
    public function setId($id){
        $this->id = $id;
    }
    public function setProductName($name){
        $this->productName = $name;
    }    
    public function setCategory($category){         
        $this->category = $category;
    }
    public function setbrand($brand){         
        $this->brand = $brand;
    }
    public function setDescription($description){         
        $this->description = $description;
    }
    public function setColor($color){         
        $this->color = $color;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setQuantity($quantity){                
        $this->quantity = $quantity;
    } 
    
    // product getters
    public function getId(){
        return $this->id;
    }
    public function getProductName(){
        return $this->productName;
    }    
    public function getCategory(){         
        return  $this->category;
    }
    public function getBrand(){         
        return $this->brand;
    }
    public function getDescription(){         
        return $this->description;
    }
    public function getColor(){
        return $this->color;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){                
        return $this->quantity;
    } 
}
    
?>   