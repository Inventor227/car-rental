<?php
session_start();
include('config.php');

// Query to fetch all available cars
$sql = "SELECT * FROM cars WHERE is_booked = 0";
$result = mysqli_query($conn, $sql);

// If user is logged in, display dropdown for number of days and start date
if(isset($_SESSION['user_id']) && $_SESSION['category'] == 'customer'){
  $days_dropdown = '<select name="rent_days">';
  for($i=1; $i<=7; $i++){
    $days_dropdown .= '<option value="'.$i.'">'.$i.' day(s)</option>';
  }
  $days_dropdown .= '</select>';

  $start_date = '<input type="date" name="start_date" required>';
}

// Process rent car form submission
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get input values from the form
  $car_id = $_POST["car_id"];
  $rent_days = $_POST["rent_days"];
  $start_date = $_POST["start_date"];
  $end_date = date('Y-m-d', strtotime($start_date . ' + '.$rent_days.' days'));

  // Insert booking details into bookings table
  $user_id = $_SESSION['user_id'];
//   $sql = "INSERT INTO bookings (car_id, user_id, start_date, end_date) VALUES ('$car_id', '$user_id', '$start_date', '$end_date')";
//   mysqli_query($conn, $sql);

  // Update is_booked field in cars table to 1
//   $sql = "UPDATE cars SET is_booked=1 customer_id='$user_id' WHERE car_id='$car_id'";
$sql = "UPDATE cars SET is_booked=1, customer_id='$user_id',start_date='$start_date',end_date='$end_date' WHERE car_id='$car_id'";
mysqli_query($conn, $sql);
  mysqli_query($conn, $sql);

  // Redirect to dashboard
  header("Location: view_booked_cars.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Cars to Rent</title>
</head>
<body>
	<h1>Available Cars to Rent</h1>
	<table>
		<tr>
			<th>Vehicle Model</th>
			<th>Vehicle Number</th>
			<th>Seating Capacity</th>
			<th>Rent per Day</th>
			<?php if(isset($_SESSION['user_id']) && $_SESSION['category'] == 'customer'){ ?>
			<th>Number of Days to Rent</th>
			<th>Start Date</th>
			<th>Rent Car</th>
			<?php } ?>
		</tr>
		<?php
		if (mysqli_num_rows($result) > 0) {
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "<tr>";
		    echo "<td>" . $row["vehicle_model"] . "</td>";
		    echo "<td>" . $row["vehicle_number"] . "</td>";
		    echo "<td>" . $row["seating_capacity"] . "</td>";
		    echo "<td>" . $row["rent_per_day"] . "</td>";
		    if(isset($_SESSION['user_id']) && $_SESSION['category'] == 'customer'){
		      echo '<form method="post" action="">';
		      echo '<input type="hidden" name="car_id" value="'.$row["car_id"].'">';
		      echo '<td>'.$days_dropdown.'</td>';
		      echo '<td>'.$start_date.'</td>';
		      echo '<td><input type="submit" value="Rent Car"></td>';
		      echo '</form>';
		    }
		    echo "</tr>";
		  }
        }
        else {
            echo "<tr><td colspan='7'>No cars available for rent.</td></tr>";
          }
          ?>
      </table>
  </body>
  </html>

	
