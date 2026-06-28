<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("db.php");

if(isset($_POST['save'])){

$product=$_POST['product'];
$price=$_POST['price'];
$stock=$_POST['stock'];

$sql="INSERT INTO products
(product_name,price,stock)
VALUES
('$product','$price','$stock')";

mysqli_query($conn,$sql);

echo "Product Saved";

}
?>

<form method="POST">

<input type="text"
name="product"
placeholder="Product Name">

<br><br>

<input type="number"
name="price"
placeholder="Price">

<br><br>

<input type="number"
name="stock"
placeholder="Stock">

<br><br>

<button name="save">
Save Product
</button>

</form>
