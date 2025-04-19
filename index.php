<?php
$host = 'host.docker.internal';
$db = 'cms';
$user = 'root';
$pass = 'root';
$port = 3307;


$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Welcome to CMS!";
$conn->close();
?>