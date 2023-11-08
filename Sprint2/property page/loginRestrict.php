<?php
// Start a session to manage user authentication
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or display an access denied message
    header("Location: login.php"); 
    exit(); // Terminate the script
}

// You can add more access control logic here, such as user roles or permissions.

// Example: Check if the user has a specific role (e.g., admin)
if (isset($_SESSION['user_role']) && $_SESSION['user_role'] !== 'admin') {
    // Redirect to an access denied page or display a message
    header("Location: access_denied.php");
    exit(); // Terminate the script
}