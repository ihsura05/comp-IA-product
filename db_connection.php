<?php
$servername = "DESKTOP-0PM2C22";
$username = "arushi";
$password = "my@sql12345";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
