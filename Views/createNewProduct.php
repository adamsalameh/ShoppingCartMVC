<?php
include_once 'Models/Product.php';
include_once 'DTO/ProductDTO.php';


$prod = new Product();

echo ('<div class="container"><table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>
      <th scope="col">Description</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>');
  
?>

<form method="post">
    <input type="hidden" name="product_id" value="Enter"/>
    <table>
        <tr>
            <th>ID:</th>
            <td><?=$productID?></td>
        </tr>
        <tr>
            <th>Product:</th>
            <td><input type="text" name="productName" /></td>
        </tr>
        <tr>
            <th>Category:</th>
            <td><input type="text" name="category" /></td>
        </tr>
        <tr>
            <th>Brand:</th>
            <td><input type="text" name="brand"/></td>
        </tr>
        <tr>
            <th>Description:</th>
            <td><textarea name="description"></textarea></td>
        </tr>
        
        <tr>
            <th>Color:</th>
            <td><input type="text" name="color"/></td>
        </tr>
        <tr>
            <th>Price:</th>
            <td><input type="text" name="price" /></td>
        </tr>
        <tr>
            <th>Quantity:</th>
            <td><input type="text" name="quantity" /></td>
        </tr>
       
        <tr>
            <td>
                <button type="submit" name="submit" value="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>

<?
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
?>
