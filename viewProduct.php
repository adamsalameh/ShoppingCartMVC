<?php



include_once ('Models/Product.php');
include_once 'DTO/ProductDTO.php';


$prod = new Product();
//$productID = $_GET['$param']??null;
$productID = $data;


$product = ($prod->getOne($productID));
echo $product->getPrice();



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

echo '<tr><td>'.$productID.'</td>
          <td>'. $product->getProductName().'</td>
          <td>'. $product->getCategory().'</td>
          <td>'. $product->getBrand().'</td>
          <td>'. $product->getDescription().'</td>
          <td>'. $product->getColor().'</td>
          <td>'. $product->getPrice().'</td>
          <td>'. $product->getQuantity().'</td></tr>';

echo '</table></div>';









?>