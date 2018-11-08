<?php

$product = $data;
?>

<form method="post">
    <table>
        <tr>
            <th>ID:</th>
            <td><?=$product->getId()?></td>
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
            <td><input type="text" name="color" value="<?=$product->getColor()?>"/></td>
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
