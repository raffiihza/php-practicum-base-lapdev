<?php
// MySQL connection details
$servername = "db"; // Replace with your server name or IP address
$username = "root";        // Replace with your MySQL username
$password = "root";            // Replace with your MySQL password
$database = "mariadb";     // Replace with the database you want to connect to

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
?>
