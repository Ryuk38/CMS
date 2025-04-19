<?php
$host = 'host.docker.internal';  // The hostname or IP address of your database server
$db = 'cms';                     // The name of your database
$user = 'root';                  // Your MySQL username
$pass = 'root';                  // Your MySQL password
$port = 3307;                    // The MySQL server port

// Create connection using the defined variables
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Welcome to CMS!";
$conn->close();
?>
