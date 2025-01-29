<?php
$servername = "localhost"; // Or the Docker container hostname if using Docker
$username = "root";
$password = ""; // The password you set for MySQL in Docker Compose
$dbname = "group_4_shareride_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
