<?php
session_start();
include('config.php');

// Get the user ID of the logged-in Car Agency user
$user_id = $_SESSION['user_id'];

// Query to fetch all cars booked by the logged-in Car Agency user
$sql = "SELECT * FROM cars WHERE customer_id = '$user_id'";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Booked Cars</title>
</head>
<body>
	<h1>View Booked Cars</h1>
	<table>
		<tr>
			<th>Vehicle Model</th>
			<th>Vehicle Number</th>
			<th>Seating Capacity</th>
			<th>Rent per Day</th>
			<th>Start Date</th>
			<th>End Date</th>
		</tr>
		<?php
		if (mysqli_num_rows($result) > 0) {
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "<tr>";
		    echo "<td>" . $row["vehicle_model"] . "</td>";
		    echo "<td>" . $row["vehicle_number"] . "</td>";
		    echo "<td>" . $row["seating_capacity"] . "</td>";
		    echo "<td>" . $row["rent_per_day"] . "</td>";
		    echo "<td>" . $row["start_date"] . "</td>";
		    echo "<td>" . $row["end_date"] . "</td>";
		    echo "</tr>";
		  }
		} else {
			echo "<p>No cars have been booked by you yet.</p>";
		}
		
		?>
		<ul>
        <li><a href="signout.php">Signout</a></li>
	</ul>
	</table>
</body>
</html>
