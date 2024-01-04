<?php
include 'db_connection.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["student_num"] . " - Name: " . $row["student_name"] ."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
