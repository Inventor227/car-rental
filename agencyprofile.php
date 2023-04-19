<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['agency_id'])) {
  header("Location: signin.php");
  exit();
}

// Include database connection file
include('config.php');

// Get user details
$agency_id = $_SESSION['agency_id'];
$sql = "SELECT name, email, contact, address,pan FROM caragency WHERE agency_id = $agency_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
  echo "Error: " . mysqli_error($conn);
} elseif (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $email = $row['email'];
  $contact = $row['contact'];
  $address = $row['address'];
  $pan = $row['pan'];
} else {
  echo "No user found.";
}

// Close database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
</head>
<body>
  <h1>Profile</h1>
  <p>Name: <?php echo $name; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Contact: <?php echo $contact; ?></p>
  <p>Address: <?php echo $address; ?></p>
  <p>pan: <?php echo $pan; ?></p>
  <a href="signout.php">Sign out</a>
</body>
</html>
