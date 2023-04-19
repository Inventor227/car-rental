<!DOCTYPE html>
<html>
<head>
<title>Car Rental System</title>
	<?php include('links.php'); ?>
</head>
<h1>Welcome to the Car Rental System</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Car Rental System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="available_cars_withoutlogin.php">View Cars</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signin.php">Signin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="customer_registration.php">Register as a Customer</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="agency_registration.php">Register as a Car Rental Agency</a>
				</li>
			</ul>
		</div>
	</nav>
    </body>
</html>