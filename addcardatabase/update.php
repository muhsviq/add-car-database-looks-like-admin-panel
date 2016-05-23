<?php
include 'db.php';
$deyisken = $_GET["id"];
 $sql= 'SELECT * FROM car_list WHERE id='.$deyisken;

 $query= mysqli_query($conn,$sql);
 $d=mysqli_fetch_object($query);
  $ad = $d->car_name;
 $il = $d->car_year;
 $reng = $d->car_color;
 $qiymet= $d->car_price;	




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	input{
		padding: 7px 12px;
		margin: 10px;
	}
	</style>
</head>
<body>
<form action="edit.php" method="post">
	<input type="text" value="<?php echo $ad; ?>">
	<input type="text" value="<?php echo $il; ?>">
	<input type="text" value="<?php echo $reng; ?>">
	<input type="text" value="<?php echo $qiymet; ?>">
	<input type="submit">

</form>
</body>
</html>