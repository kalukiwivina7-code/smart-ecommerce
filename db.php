<<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"week5db"
);

if(!$conn){

die("Connection Failed");

}

echo "Connected Successfully";

?>