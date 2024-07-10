<?php
// Perform database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "ManasekDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the dateDay parameter from the request
$dateDay = isset($_GET['dateDay']) ? $_GET['dateDay'] : '';

if ($dateDay != '') {
    // Prepare SQL statement to retrieve data
    $sql = "SELECT * FROM Manasek WHERE DateDay = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dateDay);
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Fetch data into an array
    $manasek = array();
    while ($row = $result->fetch_assoc()) {
        $manasek[] = $row;
    }
    
    // Return the data as JSON
    echo json_encode($manasek);
    
    // Close the statement and connection
    $stmt->close();
} else {
    echo json_encode(array("error" => "No dateDay provided"));
}

$conn->close();
?>
