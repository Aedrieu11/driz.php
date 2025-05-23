<?php
$conn = new mysqli("localhost", "root", "", "test");

$name = "Jane Doe";
$email = "jane@example.com";

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
