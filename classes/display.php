<?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11676655";
$password = "gHIw8lGWxf";
$dbname = "sql11676655";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM classes";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {
    echo "<div>";

    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["name"]. "</p><br>";
        echo "<p>" . $row["time"]. "</p><br>";
        echo "<p>" . $row["description"]. "</p><br>";
    }

    echo "</div>";

} else {
    echo "No data found";
}

// Close the connection
$conn->close();
?>
