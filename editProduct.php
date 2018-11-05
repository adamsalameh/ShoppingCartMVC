<?php


include_once ('Models/Product.php');
include_once 'DTO/ProductDTO.php';

$prod = new Product();
//$productID = $_GET['$param']??null;
$productID = $data;


$product = ($prod->getOne($productID));
//echo $product->getPrice();




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
  
$product = ($prod->getOne($productID));





?>

<form method="post">
    <input type="hidden" name="product_id" value="<?$productID?>"/>
    <table>
        <tr>
            <th>ID:</th>
            <td><?=$productID?></td>
        </tr>
        <tr>
            <th>Product:</th>
            <td><input type="text" name="productName" value="<?=$product->getProductName()?>"/></td>
        </tr>
        <tr>
            <th>Category:</th>
            <td><input type="text" name="category" value="<?=$product->getCategory()?>"/></td>
        </tr>
        <tr>
            <th>Brand:</th>
            <td><input type="text" name="brand" value="<?=$product->getBrand()?>"/></td>
        </tr>
        <tr>
            <th>Description:</th>
            <td><textarea name="description"><?=$product->getDescription()?></textarea></td>
        </tr>
        
        <tr>
            <th>Color:</th>
            <td><input type="text" name="color" value="<?$product->getColor()?>"/></td>
        </tr>
        <tr>
            <th>Price:</th>
            <td><input type="text" name="price" value="<?=$product->getPrice()?>"/></td>
        </tr>
        <tr>
            <th>Quantity:</th>
            <td><input type="text" name="quantity" value="<?=$product->getQuantity()?>"/></td>
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






?>