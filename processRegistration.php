<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL server
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "ManasekDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for insertion
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into user table
    $sql_insert_user = "INSERT INTO user (Email, Fname, Lname, Password, Age) 
    VALUES ('$email', '$firstName', '$lastName', '$password', '$age')";


    if ($conn->query($sql_insert_user) === TRUE) {
        // Registration successful, redirect to home page
        $fullName = $firstName . " " . $lastName;
        session_start();
        $_SESSION['email'] = $email; // Store username in session
        $_SESSION['fullName'] = $fullName; // Store full name in session

        header("Location: home.php?name=" . urlencode($fullName));
        exit(); // Stop further execution
    } else {
        echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
