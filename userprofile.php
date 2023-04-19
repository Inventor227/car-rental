<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: signin.php");
  exit();
}

// Include database connection file
include('config.php');

// Get user details
$user_id = $_SESSION['user_id'];
$sql = "SELECT name, email, contact, aadhar, address FROM user WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
  echo "Error: " . mysqli_error($conn);
} elseif (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $email = $row['email'];
  $contact = $row['contact'];
  $aadhar = $row['aadhar'];
  $address = $row['address'];
  
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
  <p>Aadhar: <?php echo $aadhar; ?></p>
  <p>Address: <?php echo $address; ?></p>
  <a href="signout.php">Sign out</a>
</body>
</html>
