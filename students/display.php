<?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11676655";
$password = "gHIw8lGWxf";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM your_table_name";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["name"]. "</p>";
    }

} else {
    echo "No data found";
}

// Close the connection
$conn->close();
?>
