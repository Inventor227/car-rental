<?php
session_start();
include('config.php');


$sql = "SELECT * FROM cars WHERE is_booked = 0";
$result = mysqli_query($conn, $sql);

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
	<style>
		.table td, .table th {
			color: white;
			border: none;
		}
	</style>
</head>
<body>

	<h1>Available Cars to Rent</h1>
	<?php if (mysqli_num_rows($result) > 0) { ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Vehicle Model</th>
					<th>Vehicle Number</th>
					<th>Seating Capacity</th>
					<th>Rent per Day</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row["vehicle_model"]; ?></td>
						<td><?php echo $row["vehicle_number"]; ?></td>
						<td><?php echo $row["seating_capacity"]; ?></td>
						<td><?php echo $row["rent_per_day"]; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php } else { ?>
		<p>No cars available for rent.</p>
	<?php } ?>
</body>
</html>