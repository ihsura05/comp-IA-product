<?php
// Establish a connection to the database
$servername = "DESKTOP-0PM2C22";
$username = "arushi";
$password = "my@sql12345";
$dbname = "students";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $num = $_POST["number"];

    // Insert data into the database
    $sql = "INSERT INTO students (student_name, student_num) VALUES ('$name', '$num')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
