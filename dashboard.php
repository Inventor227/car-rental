<?php
session_start();
//if user or agency is not signed in then redirected to signin page
if(!isset($_SESSION['user_id']) && !isset($_SESSION['agency_id']) ){
  header("Location: signin.php");
}

// Redirect customer to available cars page
if($_SESSION['category'] == 'customer'){
  header("Location: Available_cars_to_rent.php");
}
//tried that when going back from dashboard to signing page without signing out then session should end
if(isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'dashboard.php') !== false) {
	if (isset($_SESSION['user_id']) || isset($_SESSION['agency_id'])) {
	  unset($_SESSION['user_id']);
	  unset($_SESSION['category']);
	  unset($_SESSION['agency_id']);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php include('headeragency.php'); ?>
</head>
<body>
	<h1>Dashboard</h1>
	<?php if($_SESSION['category'] == 'agency' && isset($_SESSION['agency_id'])){ ?>
		<div class="container">
<ul class="list-unstyled d-flex justify-content-between my-4">
	<li><a href="add_new_car.php"><button class="btn btn-primary">Add cars</button></a></li>
</ul>
	
	<?php } 
	

	?>

</body>
</html>
