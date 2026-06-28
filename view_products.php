<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("db.php");

$result=mysqli_query(
$conn,
"SELECT * FROM products"
);

while($row=mysqli_fetch_assoc($result)){

echo $row['product_name'];
echo "<br>";

echo $row['price'];
echo "<br>";

echo $row['stock'];

echo "<hr>";

}
?>
