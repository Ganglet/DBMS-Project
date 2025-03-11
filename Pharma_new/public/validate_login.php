<?php
// Start session
session_start();

// Include database connection
require_once 'dbconnect.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate input
    if (empty($username) || empty($password)) {
        header("Location: index.php?error=Username and password are required");
        exit();
    }
    
    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, username, password, full_name, role, status FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Check if account is active
        if ($user['status'] === 'inactive') {
            header("Location: index.php?error=Your account is inactive. Please contact administrator.");
            exit();
        }
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['logged_in'] = true;
            
            // Update last login time
            $update = $conn->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
            $update->bind_param("i", $user['id']);
            $update->execute();
            
            // Redirect based on role
            if ($user['role'] === 'admin') {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: dashboard.php");
            }
            exit();
        } else {
            // Password is incorrect
            header("Location: index.php?error=Invalid username or password");
            exit();
        }
    } else {
        // User does not exist
        header("Location: index.php?error=Invalid username or password");
        exit();
    }
    
    $stmt->close();
} else {
    // If not POST request, redirect to login page
    header("Location: index.php");
    exit();
}

$conn->close();
?>