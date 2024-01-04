<?php
include 'db_connection.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

 // Display data in a table
 if ($result->num_rows > 0) {
    echo "<table border='1'>
          <tr>
              <th>Num</th>
              <th>Name</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>{$row['student_num']}</td>
              <td>{$row['student_name']}</td>
          </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
