<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style type="text/css">
	body{
		background-color: black;
	}
	table{
		color:white;
	}
	td{
		padding: 20px;
		
		border:1px solid white; 


	}
	table{
		border:1px solid black;

	}
	button{
		padding: 10px 20px;
		background-color: maroon;
		border:none;
		color:white;
		font-weight: bold;
	}
	#update{
		background-color: lightblue;

	}



	</style>
</head>
<body>
<table>
 <?php
include 'db.php';
$sql = 'SELECT * FROM car_list';
$query = mysqli_query($conn,$sql);

 while ($deyisken = mysqli_fetch_object($query)) {
 	echo "<tr>";
 	foreach ($deyisken as $key) {
 		echo "<td>";
 		echo $key;
 		echo "</td>";
 	}
 	echo "<td><button><a href='delete.php?id=$deyisken->id'>Delete</a></button></td>";
 	echo "<td><button id='update'><a href='update.php?id=$deyisken->id'>Update</a></button></td>";
 	echo "</tr>";
 	# code...
 }



 ?>

 </table>
 <a href="carform.php"><button style="margin: 10px;">Add a new car</button></a>
 </body>
</html>
