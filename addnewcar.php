<?php
session_start();
include('config.php');
if(!isset($_SESSION['agency_id']) || $_SESSION['category'] != 'agency'){
  header("Location: signin.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $vehicle_model = $_POST["vehicle_model"];
  $vehicle_number = $_POST["vehicle_number"];
  $seating_capacity = $_POST["seating_capacity"];
  $rent_per_day = $_POST["rent_per_day"];

  $agency_id = $_SESSION['agency_id'];

  $sql = "INSERT INTO cars (vehicle_model, vehicle_number, seating_capacity, rent_per_day, agency_id) 
          VALUES ('$vehicle_model', '$vehicle_number', '$seating_capacity', '$rent_per_day', '$agency_id')";

  if (mysqli_query($conn, $sql)) {
    echo "Car added successfully.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Car</title>
</head>
<body>
	<h1>Add New Car</h1>
	<form action="add_new_car.php" method="post">
		<label for="vehicle_model">Vehicle Model:</label>
		<input type="text" id="vehicle_model" name="vehicle_model" required><br><br>
		<label for="vehicle_number">Vehicle Number:</label>
		<input type="text" id="vehicle_number" name="vehicle_number" required><br><br>
		<label for="seating_capacity">Seating Capacity:</label>
		<input type="text" id="seating_capacity" name="seating_capacity" required><br><br>
		<label for="rent_per_day">Rent per Day:</label>
		<input type="text" id="rent_per_day" name="rent_per_day" required><br><br>
		<input type="submit" value="Add Car">
	</form>
</body>
</html>
