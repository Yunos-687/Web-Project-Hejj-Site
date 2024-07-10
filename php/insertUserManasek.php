<?php
// Start session
session_start();

// Perform database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "manasekdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from POST request
$userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';
$manasekId = isset($_POST['manasekId']) ? $_POST['manasekId'] : '';

if ($userEmail && $manasekId) {
    // Check if Manasek ID exists in the manasek table
    $checkSql = "SELECT M_ID FROM manasek WHERE M_ID = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("i", $manasekId);
    $checkStmt->execute();
    $checkStmt->store_result();
    
    if ($checkStmt->num_rows > 0) {
        // Prepare SQL statement to insert data into user_manasek table
        $sql = "INSERT INTO user_manasek (UserEmail, M_ID) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $userEmail, $manasekId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Manasek ID does not exist";
    }

    // Close the check statement
    $checkStmt->close();
} else {
    echo "Error: Missing required data";
}

// Close the connection
$conn->close();
?>
