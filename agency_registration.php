<!DOCTYPE html>
<html>
<head>
	<title>Car Rental Agency Registration</title>
	<?php include('header.php'); ?>
</head>
<body>
	<h1>Car Rental Agency Registration</h1>
	<form action="agency_registration_submit.php" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		<label for="contact">Contact Number:</label>
		<input type="text" id="contact" name="contact" required><br><br>
		<label for="pan">PAN Number:</label>
		<input type="text" id="pan" name="pan" required><br><br>
		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea><br><br>
		<input type="submit" value="Register">
	</form>
</body>
</
