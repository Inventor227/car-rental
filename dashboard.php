<?php
session_start();

if(!isset($_SESSION['user_id']) && !isset($_SESSION['agency_id']) ){
  header("Location: signin.php");
}

// Redirect customer to available cars page
if($_SESSION['category'] == 'customer'){
  header("Location: Available_cars_to_rent.php");
}

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
</head>
<body>
	<h1>Dashboard</h1>
	<?php if($_SESSION['category'] == 'agency' && isset($_SESSION['agency_id'])){ ?>
	<a href="add_new_car.php">Add New Car</a>

	<?php } 
	
// if(isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'dashboard.php') !== false) {
// 	if (isset($_SESSION['user_id']) || isset($_SESSION['agency_id'])) {
// 	  unset($_SESSION['user_id']);
// 	  unset($_SESSION['category']);
// 	  unset($_SESSION['agency_id']);
// 	}
//   }
		// if (isset($_SESSION['user_id']) ||isset($_SESSION['agency_id']) ) {
		// 	unset($_SESSION['user_id']);
		// 	unset($_SESSION['category']);
		// 	unset($_SESSION['agency_id']);
		//   }
	?>

</body>
</html>
