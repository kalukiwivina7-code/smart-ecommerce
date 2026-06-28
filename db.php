<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect(
"localhost",
"root",
"",
"week7db"
);

if(!$conn){
    die("<strong>Fatal Error: Database connection failed!</strong><br>Error: " . mysqli_connect_error() . "<br><br>Please make sure:
    <ul>
        <li>MySQL is running in XAMPP</li>
    
?>    <li>Database 'week7db' exists</li>
    </ul>");
}
