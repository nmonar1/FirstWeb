<?php
// Include database connection file
include('db_connect.php');

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO contact_us (fullname, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $fullname, $email, $message);

if ($stmt->execute()) {
    echo "Response sent successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
