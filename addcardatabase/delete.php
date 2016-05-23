<?php
include 'db.php';
$deyisken = $_GET['id'];
$sql = "DELETE FROM car_list WHERE id=$deyisken";
$query =mysqli_query($conn,$sql);
header('Location:carlist.php');


?>