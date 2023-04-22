<?php
include('config.php');

//retrieving information submitted from form submitted in customer registration page
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $contact = $_POST["contact"];
  $pan = $_POST["pan"];
  $address = $_POST["address"];

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//inserting data into table caragency
  $sql = "INSERT INTO caragency (name, email, password, contact, pan, address) 
          VALUES ('$name', '$email', '$hashed_password', '$contact', '$pan', '$address')";

  if (mysqli_query($conn, $sql)) {
    echo "Registration successful.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }


  mysqli_close($conn);
}

?>