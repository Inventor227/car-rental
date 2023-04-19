<?php
session_start();
include('config.php');

          
if($_SESSION['category'] != 'agency'){
  header("Location: signin.php");
}

if(isset($_POST["submit"])){
  $vehicle_model = $_POST["vehicle_model"];
  $vehicle_number = $_POST["vehicle_number"];
  $seating_capacity = $_POST["seating_capacity"];
  $rent_per_day = $_POST["rent_per_day"];
  
  if(isset($_SESSION['agency_id'])){
    $agency_id = $_SESSION['agency_id'];
    $sql = "INSERT INTO cars (vehicle_model, vehicle_number, seating_capacity, rent_per_day, agency_id) 
            VALUES ('$vehicle_model', '$vehicle_number', '$seating_capacity', '$rent_per_day', '$agency_id')";
    
    if (mysqli_query($conn, $sql)) {
      echo "Car added successfully.";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
  } else {
    echo "Error: Agency ID not set in session.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Car</title>
</head>
<body>
<ul>
        <li><a href="signout.php">Signout</a></li>
	</ul>
	<h1>Add New Car</h1>
  <ul>
        <li><a href="agencyprofile.php">View profile</a></li>
	       </ul>
	<form action="add_new_car.php" method="post">
		<label for="vehicle_model">Vehicle Model:</label>
		<input type="text" id="vehicle_model" name="vehicle_model" required><br><br>
		<label for="vehicle_number">Vehicle Number:</label>
		<input type="text" id="vehicle_number" name="vehicle_number" required><br><br>
		<label for="seating_capacity">Seating Capacity:</label>
		<input type="text" id="seating_capacity" name="seating_capacity" required><br><br>
		<label for="rent_per_day">Rent per Day:</label>
		<input type="text" id="rent_per_day" name="rent_per_day" required><br><br>
		<input type="submit" name="submit" value="Add Car">
	</form>
</body>
</html>
