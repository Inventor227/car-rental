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
		}
		*{
			backdrop-filter: blur(5px);
		}
		
	</style>
</head>
<body>
<h1>Welcome to the Car Rental System</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="available_cars_to_rent.php">Available cars to rent</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="userprofile.php">Your profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signout.php">Sign out</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view_booked_cars.php">View Booked Cars</a>
				</li>
			</ul>
		</div>
	</nav>
	
</body>
</html>