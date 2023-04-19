<!DOCTYPE html>
<html>
<head>
	<title>Car Rental System</title>
	<?php include('links.php'); ?>
    <style>
		body {
			background-image: url("images/agency.jpg");
			background-repeat: no-repeat;
			background-size: cover;
            background-position: center center;
            color: white;
            font-weight:bold;
		}
	</style>
</head>
<body>
<h1>Welcome to the Car Rental System</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="add_new_car.php">Add cars</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="agencyprofile.php">Your profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signout.php">Sign out</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="dashboard.php">Go to Dashboard</a>
				</li>

			</ul>
		</div>
	</nav>
	
</body>
</html>