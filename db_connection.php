<?php
// Database credentials
$servername = "localhost"; // or the IP address of your database server
$username = "username"; // your database username
$password = "password"; // your database password
$database = "dbname"; // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
    // You can perform database operations here
}

// Close the connection when you are done
$conn->close();
?>
