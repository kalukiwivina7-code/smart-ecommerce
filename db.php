<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_ecommerce";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";

?>