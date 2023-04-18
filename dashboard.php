<?php
session_start();

if($_SESSION['category'] == 'customer'){
  header("Location: Available_cars_to_rent.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>Dashboard</h1>
	<a href="add_new_car.php">Add New Car</a>
</body>
</html>
