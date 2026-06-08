<?php

include 'db.php';

mysqli_query(
$conn,
"INSERT INTO users(username,password)
VALUES('admin','1234')"
);

echo "User Added";

?>