<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database connection
require_once 'dbconnect.php';

// Log admin logout if it's an admin
if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    $user_id = $_SESSION['user_id'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $log = $conn->prepare("INSERT INTO admin_logs (user_id, action, ip_address) VALUES (?, 'Admin Logout', ?)");
    $log->bind_param("is", $user_id, $ip);
    $log->execute();
}

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit();
?>