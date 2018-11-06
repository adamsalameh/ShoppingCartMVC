<?php

$products = new Product();
echo ('<div class="container">
      <table class="table table-striped">
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
  
foreach ($products->getAll() as $product){
    
        echo '<tr><td>'. $product->getId().'</td>
        <td>'. $product->getProductName().'</td>
        <td>'. $product->getCategory().'</td>
        <td>'. $product->getBrand().'</td>
        <td>'. $product->getDescription().'</td>
        <td>'. $product->getColor().'</td>
        <td>'. $product->getPrice().'</td>
        <td>'. $product->getQuantity().'</td>
        
        <td><a href="viewProduct/'.$product->getId().'">View</a></td>
        <td><a href="editProduct/'.$product->getId().'">Edit</a></td>
        <td><a href="deleteProduct/'.$product->getId().'">Delete</a></td></tr>';
        
} 
 
echo '</table></div>';
?>
