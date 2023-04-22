<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<?php include('header.php'); ?>
</head>
<body>
<div class="container">/
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1 class="text-center">Sign In</h1>
				<form action="signin_submit.php" method="post">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
					<div class="form-group">
						<label for="user_type">User Type:</label>
						<select class="form-control" id="user_type" name="user_type" required>
							<option value="">--Select User Type--</option>//to select whether user or agency
							<option value="customer">Customer</option>
							<option value="agency">Agency</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Sign In</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
