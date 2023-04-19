<!DOCTYPE html>
<html>
<head>
	<title>Car Rental Agency Registration</title>
	<?php include('header.php'); ?>
</head>
<body>
<div class="container">
		<h1 class="mt-5">Car Rental Agency Registration</h1>
		<form action="agency_registration_submit.php" method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm Password:</label>
				<input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
			</div>
			<div class="form-group">
				<label for="contact">Contact Number:</label>
				<input type="text" class="form-control" id="contact" name="contact" required>
			</div>
			<div class="form-group">
				<label for="pan">PAN Number:</label>
				<input type="text" class="form-control" id="pan" name="pan" required>
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<textarea class="form-control" id="address" name="address" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
</body>
</
