<?php
// Database credentials
$host = "your_host";          // e.g., "localhost"
$username = "your_username";  // e.g., "root"
$password = "your_password";  // e.g., ""
$database = "your_database";  // e.g., "mydb"

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo "No connection: " . $conn->connect_error;
} else {
    echo "Yes connection";
}

// Close connection (optional)
// $conn->close();
?>
