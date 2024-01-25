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

// Retrieve data from the form
$name = $_POST['name'];

// Check if the user exists before updating
$checkUserSql = "SELECT * FROM students WHERE name = $name";
$userResult = $conn->query($checkUserSql);

if ($userResult->num_rows > 0) {
    $row = $userResult->fetch_assoc();
    $name = $row['name'];

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_jan]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_jan = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_feb]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_feb = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_march]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_march = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_april]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_april = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_may]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_may = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_june]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_june = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_july]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_july = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_aug]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_aug = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_sep]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_sep = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_oct]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_oct = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_nov]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_nov = $isChecked WHERE name = $name";
    $conn->query($updateSql);

    // Check if the checkbox is checked for this month
    $isChecked = isset($_POST[$payments_dec]) ? 1 : 0;
    // Update the specific column for the specific record
    $updateSql = "UPDATE students SET $payments_dec = $isChecked WHERE name = $name";
    $conn->query($updateSql);
}

else {
    echo "User with name $name does not exist.";
}
// Close the connection
$conn->close();
?>
