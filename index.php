<?php
$host = "mysql";        // Use the MySQL container name
$user = "root";         // MySQL username
$pass = "root";         // MySQL password
$db   = "cms";          // Name of your DB (you can check it in phpMyAdmin)
$port = 3307;           // Default MySQL port

$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Successfully connected to MySQL from PHP container!";
?>
