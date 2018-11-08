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

?>
