<?php

include_once 'Model.php';
include_once 'DTO/ProductDTO.php';

class Product extends Model{
    
        
    public function getAll() {
        
        $result = $this->db->query('SELECT * FROM products');
        return $result->fetchALL(PDO::FETCH_CLASS,'ProductDTO');
            
    }
    
    
    public function getOne($id){
        $result = $this->db->prepare('SELECT * FROM products WHERE id = :id');

        $result->bindParam('id',$id);
        $result->execute();

       // return $result->fetch(PDO::FETCH_ASSOC);
        return $result->fetchObject('ProductDTO');
        
    }
    
    
    public function updateProduct(ProductDTO $product){
        
        $result = $this->db->prepare('UPDATE products SET                                                 
                                    productName=:productName,
                                    category=:category,
                                    brand=:brand,
                                    description=:description,
                                    color=:color,
                                    price=:price,
                                    quantity = :quantity WHERE id = :id');
        $result->bindParam('id',$product->getId);
        $result->bindParam('productName',$product->getProductName);
        $result->bindParam('category',$product->getCategory);
        $result->bindParam('brand',$product->getBrand);
        $result->bindParam('description',$product->getDescription);
        $result->bindParam('color',$product->getColor);
        $result->bindParam('price',$product->getPrice);
        $result->bindParam('quantity',$product->Quantity);

        $result->execute();
        
    }
    
    
    public function removeProduct($id){
        $result = $this->db->prepare('DELETE FROM products WHERE id = :id');

        $result->bindParam('id',$id);
        $result->execute();
       

              
        
    }
    
}


?>