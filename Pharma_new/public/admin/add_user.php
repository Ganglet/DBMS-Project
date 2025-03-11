<?php
// Include authentication check
require_once 'auth_check.php';

// Include database connection
require_once '../dbconnect.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    // Validate input
    if (empty($username) || empty($password) || empty($full_name) || empty($email) || empty($role)) {
        header("Location: users.php?error=All fields are required");
        exit();
    }
    
    // Check if username already exists
    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $result = $check->get_result();
    
    if ($result->num_rows > 0) {
        header("Location: users.php?error=Username already exists");
        exit();
    }
    
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (username, password, full_name, email, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $hashed_password, $full_name, $email, $role);
    
    if ($stmt->execute()) {
        header("Location: users.php?success=User added successfully");
    } else {
        header("Location: users.php?error=Error adding user: " . $conn->error);
    }
    
    $stmt->close();
} else {
    // If not POST request, redirect to users page
    header("Location: users.php");
}

$conn->close();
?>