<?php
include 'db.php';
$name=$_POST['name'];
$year=$_POST['year'];
$color=$_POST['color'];
$price=$_POST['price'];
$id=$_POST['id'];
$sql = "UPDATE car_list SET car_name=$name,car_year=$year,car_color=$color,car_price=$price WHERE id=$id";
$query=mysqli_query($conn,$sql);
header('Location:carlist.php');


?>