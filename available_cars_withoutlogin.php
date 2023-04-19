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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Cars to Rent</title>
    <?php include('header.php'); ?>
</head>
<body>

	<h1>Available Cars to Rent</h1>
	<table>
		<tr>
			<th>Vehicle Model</th>
			<th>Vehicle Number</th>
			<th>Seating Capacity</th>
			<th>Rent per Day</th>
			<?php  ?>
		</tr>
		<?php
		if (mysqli_num_rows($result) > 0) {
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "<tr>";
		    echo "<td>" . $row["vehicle_model"] . "</td>";
		    echo "<td>" . $row["vehicle_number"] . "</td>";
		    echo "<td>" . $row["seating_capacity"] . "</td>";
		    echo "<td>" . $row["rent_per_day"] . "</td>";
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

	
