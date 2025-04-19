<?php
$host = '172.17.0.1';  // IP address of your host machine on Docker network
$db = 'cms';            // Your database name
$user = 'root';         // Your MySQL username
$pass = 'root';         // Your MySQL password
$port = 3307;           // MySQL port

// Create connection using the defined variables
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Welcome to CMS!";
$conn->close();
?>
