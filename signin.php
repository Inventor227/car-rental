<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<?php include('header.php'); ?>
</head>
<body>
	<h1>Sign In</h1>

	<form action="signin_submit.php" method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="user_type">User Type:</label>
		<select id="user_type" name="user_type" required>
			<option value="">--Select User Type--</option>
			<option value="customer">Customer</option>
			<option value="agency">Agency</option>
		</select><br><br>
		<input type="submit" value="Sign In">
	</form>
</body>
</html>
