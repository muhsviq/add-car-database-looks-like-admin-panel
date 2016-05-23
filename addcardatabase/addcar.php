<?php
include 'db.php';
$sname = $_POST["name"];
$syear = $_POST["year"]; 
$scolor = $_POST["color"];
$sprice = $_POST["price"];

$sql = "INSERT INTO car_list( car_name, car_year, car_color, car_price) VALUES ('$sname','$syear','$scolor','$sprice')";
$query = mysqli_query($conn,$sql);
if($query){
	header('Location:carlist.php');
}
else{
	echo "error";
}

?>s