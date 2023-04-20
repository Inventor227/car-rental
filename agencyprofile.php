<?php
session_start();

if (!isset($_SESSION['agency_id'])) {
  header("Location: signin.php");
  exit();
}


include('config.php');

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

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <?php include('headeragency.php'); ?>
</head>
<body>
<h1 class="my-5">Profile</h1>
    <div class="row">
      <div class="col-md-6">
        <p class="lead"><strong>Name:</strong> <?php echo $name; ?></p>
        <p class="lead"><strong>Email:</strong> <?php echo $email; ?></p>
        <p class="lead"><strong>Contact:</strong> <?php echo $contact; ?></p>
      </div>
      <div class="col-md-6">
        <p class="lead"><strong>Address:</strong> <?php echo $address; ?></p>
        <p class="lead"><strong>PAN:</strong> <?php echo $pan; ?></p>
      </div>
    </div>
  </div>

</body>
</html>
