<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	input{
		padding: 8px 10px;
		margin: 5px;
	}
	input[type="submit"]{
		padding: 7px 20px;
		background-color: black;
		color: white;
		font-weight: bold;
		border:none;
	}
	</style>
</head>
<body>
<h1>Please add your car!</h1>
<form action="addcar.php" method="post">
	<input type="text" name="name" placeholder="name">
	<input type="text" name="year" placeholder="year">
	<input type="text" name="color" placeholder="color">
	<input type="text" name="price" placeholder="price">
	<input type="submit">

</form>
</body>
</html>