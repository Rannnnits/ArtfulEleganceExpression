<?php 
include 'koneksi.php';

// Get form data
$name = $_POST['name'];
$address = $_POST['address'];
$destination = $_POST['destination'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO your_table_name (name, address, destination) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $address, $destination);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}