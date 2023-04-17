<?php
session_start();

if(!isset($_SESSION['user_id'])){
  header("Location: signin.php");
}

// Redirect customer to available cars page
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
	<?php if($_SESSION['category'] == 'agency'){ ?>
	<a href="add_new_car.php">Add New Car</a>
	<?php } ?>
</body>
</html>