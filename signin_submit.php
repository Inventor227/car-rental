<?php
session_start();
include('config.php');

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    $category = $_POST["user_type"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to fetch user data
    if ($category == "customer") {
        $sql = "SELECT * FROM user WHERE email='$email'";
    } else if ($category == "agency") {
        $sql = "SELECT * FROM caragency WHERE email='$email'";
    } else {
        echo "Invalid category.";
        exit();
    }

    // Execute SQL statement
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Verify password hash
        if (password_verify($password, $row['password'])) {
            // Password is correct, start a new session
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $email;
            $_SESSION['category'] = $category;

            // Set agency_id session for agency user
            if ($category == "agency") {
                $_SESSION['agency_id'] = $row['agency_id'];
            }
            else{
                $_SESSION['user_id'] = $row['user_id'];
            }
            // Redirect to dashboard
            header("Location: dashboard.php");
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
