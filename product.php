<?php

include("db.php");

$result=mysqli_query(
$conn,
"SELECT * FROM products"
);

while($row=mysqli_fetch_assoc($result)){

echo $row['product_name']."<br>";
echo $row['price']."<br>";
echo $row['stock']."<hr>";

}

?>