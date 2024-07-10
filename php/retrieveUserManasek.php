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

// Get the user email from session
$userEmail = isset($_GET['userEmail']) ? $_GET['userEmail'] : '';

if ($userEmail) {
    // Prepare SQL statement to retrieve user_manasek records
    $sql = "SELECT M_ID FROM user_manasek WHERE UserEmail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userEmail);

    // Execute the statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    // Initialize an array to store the records
    $records = array();

    // Fetch rows
    while ($row = $result->fetch_assoc()) {
        $records[] = $row;
    }

    // Close statement
    $stmt->close();

    // Return JSON response
    echo json_encode($records);
} else {
    echo "Error: Missing user email";
}

// Close the connection
$conn->close();
?>
