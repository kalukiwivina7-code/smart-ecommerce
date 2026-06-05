<!DOCTYPE html>
<html>
<body>

<form method="POST">

Name:
<input type="text"
name="name">

<input type="submit"
value="Submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST["name"];

echo "<h2>Welcome $name</h2>";

}

?>

</body>
</html>