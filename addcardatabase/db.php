<?php
$host = "localhost";
$username= "root";
$password= "";
$schema = "cars";

$conn = mysqli_connect($host,$username,$password,$schema);
if(!$conn)
echo "Error! You can't join the database";
else
echo "Connection is successfully";

?>
