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
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<form action = "insert.php" method = "post"';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td><input type="checkbox" name="assignments_jan" ' . ($row[$assignments_jan] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_feb" ' . ($row[$assignments_feb] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_march" ' . ($row[$assignments_march] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_april" ' . ($row[$assignments_april] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_may" ' . ($row[$assignments_may] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_june" ' . ($row[$assignments_june] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_july" ' . ($row[$assignments_july] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_aug" ' . ($row[$assignments_aug] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_sep" ' . ($row[$assignments_sep] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_oct" ' . ($row[$assignments_oct] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_nov" ' . ($row[$assignments_nov] ? 'checked' : '') . '></td>';
        echo '<td><input type="checkbox" name="assignments_dec" ' . ($row[$assignments_dec] ? 'checked' : '') . '></td>';
        echo '</form>';
        echo '</tr>';
    }

} else {
    echo "No data found";
}

// Close the connection
$conn->close();
?>
