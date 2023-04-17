<?php
session_start();

// if(!isset($_SESSION['agency_id']) || $_SESSION['category'] != 'agency'){
//   header("Location: signin.php");
// }

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
