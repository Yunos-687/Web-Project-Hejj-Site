<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "ManasekDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve values from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, redirect to home page
        $row = $result->fetch_assoc();
        $fullName = $row['Fname'] . " " . $row['Lname'];

        // Start session and store email and full name
        session_start();
        $_SESSION['email'] = $email; // Store email in session
        $_SESSION['fullName'] = $fullName; // Store full name in session

        // Redirect to home page
        header("Location: home.php");
        exit(); // Stop further execution
    } else {
        // User not found, display error message
        $error = "Username or password are not correct. Please try again.";
    }

    // Close database connection
    $conn->close();
}

// If execution reaches here, it means there was an error during login
// Display the login form with the error message
include('login.php');
?>
