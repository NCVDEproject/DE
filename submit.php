<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_hygiene_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$establishment_name = $_POST['establishment_name'];
$hygiene_score = $_POST['hygiene_score'];
$inspection_date = $_POST['inspection_date'];
$inspector_name = $_POST['inspector_name'];

// Insert into database
$sql = "INSERT INTO hygiene_records (establishment_name, hygiene_score, inspection_date, inspector_name)
        VALUES ('$establishment_name', '$hygiene_score', '$inspection_date', '$inspector_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
