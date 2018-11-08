<?php


class ProductController extends Controller{
    
    
    public function __construct(){
        
            
    }
    
    public function viewAllProducts(){
        
        $products = new Product();
        $data = $products->getAll();
        $this->renderView("viewAllProducts", $data);            
    
    }
    
    public function deleteProduct($id){
       
        $product = new Product();
        $product->removeProduct($id);
        $param = $id. " is Deleted";
        $this->renderView(__FUNCTION__,$param);
    }
    
    public function editProduct($id){
        
        
       $prod = new Product();
       $product = $prod->getOne($id);
       $param = $product; 
       
       $this->renderView(__FUNCTION__,$param);
        
       if(isset($_POST['submit'])){
           
        $name = $_POST['productName'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $color = $_POST['color'];
        $price = (float)$_POST['price'];
        $quantity = (int)$_POST['quantity'];    
        // set the product details
        $product->setProductName($name);
        $product->setCategory($category);
        $product->setbrand($brand);
        $product->setDescription($description);
        $product->setColor($color);
        $product->setPrice($price);
        $product->setQuantity($quantity);   
        // update the product details
        $prod->updateProduct($product);    
        }
        
        
    }
    
    public function viewProduct($id){
       $prod = new Product();
       $product = $prod->getOne($id);          
       $param = $product;
       $this->renderView(__FUNCTION__,$param); 
    }
    
    public function createNewProduct(){
        
        $this->renderView(__FUNCTION__,$param);
        $prod = new Product();
        if(isset($_POST['submit'])){
    
    
        $name = $_POST['productName'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $color = $_POST['color'];
        $price = (float)$_POST['price'];
        $quantity = (int)$_POST['quantity'];
    
        // set the product details
        $product = new ProductDTO();
        $product->setProductName($name);
        $product->setCategory($category);
        $product->setbrand($brand);
        $product->setDescription($description);
        $product->setColor($color);
        $product->setPrice($price);
        $product->setQuantity($quantity);
    
        // update the product details
        $prod->addProduct($product);
    
        } 
    }
    
}

?>
