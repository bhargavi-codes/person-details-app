<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'person_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO person_details (name, dob, address, phone) 
            VALUES ('$name', '$dob', '$address', '$phone')";

    if ($conn->query($sql)) {
        echo "<script>alert('Data Inserted Successfully!'); window.location.href='view.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
