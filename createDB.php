<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Create database "Manasek"
$sql_create_db = "CREATE DATABASE IF NOT EXISTS ManasekDB";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the created database
$conn->select_db("ManasekDB");

// Step 3: Create "user" table
$sql_create_user_table = "CREATE TABLE IF NOT EXISTS user (
    Email VARCHAR(100) PRIMARY KEY,
    Fname VARCHAR(50),
    Lname VARCHAR(50),
    Password VARCHAR(100),
    Age INT
)";

if ($conn->query($sql_create_user_table) === TRUE) {
    echo "Table 'user' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Step 4: Create "ManasekDB" table
$sql_create_manasek_table = "CREATE TABLE IF NOT EXISTS Manasek (
    M_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(200),
    DateDay VARCHAR(200),
    Description text
)";
if ($conn->query($sql_create_manasek_table) === TRUE) {
    echo "Table 'Manasek' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}



// Step 5: Create "user_manasek" table with relationships
$sql_create_user_manasek_table = "CREATE TABLE IF NOT EXISTS user_manasek (
    UserEmail VARCHAR(255),
    M_ID INT,
    PRIMARY KEY (UserEmail, M_ID),
    FOREIGN KEY (UserEmail) REFERENCES user(Email),
    FOREIGN KEY (M_ID) REFERENCES Manasek(M_ID)
)";
 
if ($conn->query($sql_create_user_manasek_table) === TRUE) {
    echo "Table 'User_Manasek' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
