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
	<?php include('headeruser.php'); ?>
	<style>
		.table td, .table th {
			color: white;
			border: none;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<h1>View Booked Cars</h1>
		<?php if (mysqli_num_rows($result) > 0) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Vehicle Model</th>
						<th>Vehicle Number</th>
						<th>Seating Capacity</th>
						<th>Rent per Day</th>
						<th>Start Date</th>
						<th>End Date</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row["vehicle_model"]; ?></td>
							<td><?php echo $row["vehicle_number"]; ?></td>
							<td><?php echo $row["seating_capacity"]; ?></td>
							<td><?php echo $row["rent_per_day"]; ?></td>
							<td><?php echo $row["start_date"]; ?></td>
							<td><?php echo $row["end_date"]; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		<?php } else { ?>
			<p>No cars have been booked by you yet.</p>
		<?php } ?>
	</div>
</body>
</html>
