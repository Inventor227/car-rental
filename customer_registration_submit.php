<?php
include('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Include database connection file


  // Get input values from the form
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $contact = $_POST["contact"];
  $aadhar = $_POST["aadhar"];
  $address = $_POST["address"];

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Prepare SQL statement to insert customer data
  $sql = "INSERT INTO user (name, email, password, contact, aadhar, address) 
          VALUES ('$name', '$email', '$hashed_password', '$contact', '$aadhar', '$address')";

  // Execute SQL statement
  if (mysqli_query($conn, $sql)) {
    echo "Registration successful.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
}

?>