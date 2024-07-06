<?php
// Include database connection file
include('db_connect.php');

// Get form data
$fullname = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$skin_type = $_POST['skin_type'];
$skin_concerns = $_POST['skin_concerns'];
$allergies = $_POST['allergies'];
$current_products = $_POST['current_products'];

// Generate a unique username based on email (you can modify this logic)
$username = explode('@', $email)[0];

// Check if user exists
$sql_check_user = "SELECT email FROM users WHERE email = ?";
$stmt_check_user = $conn->prepare($sql_check_user);
$stmt_check_user->bind_param("s", $email);
$stmt_check_user->execute();
$stmt_check_user->store_result();

if ($stmt_check_user->num_rows == 0) {
    // User does not exist, insert user
    $sql_insert_user = "INSERT INTO users (fullname, email, username) VALUES (?, ?, ?)";
    $stmt_insert_user = $conn->prepare($sql_insert_user);
    $stmt_insert_user->bind_param("sss", $fullname, $email, $username);
    $stmt_insert_user->execute();
    $stmt_insert_user->close();
}

$stmt_check_user->close();

// Insert data into skin_analysis
$sql = "INSERT INTO skin_analysis (fullname, email, age, gender, skin_type, skin_concerns, allergies, current_products) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisssss", $fullname, $email, $age, $gender, $skin_type, $skin_concerns, $allergies, $current_products);

if ($stmt->execute()) {
    echo "Skin analysis feedback submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
