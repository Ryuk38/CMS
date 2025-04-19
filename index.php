<?php
$servername = "mysql";
$username = "root";
$password = "root"; // or whatever your actual root password is
$database = "cms";
$port = 3306; // default MySQL port inside container


// Create connection using the defined variables
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Welcome to CMS!";
$conn->close();
?>
