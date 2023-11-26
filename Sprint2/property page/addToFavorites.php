<?php
// addToFavorites.php
require 'property_functions.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

// Get property ID from the AJAX request
$propertyId = $_POST['propertyId'];

// Get user ID from the session
$userId = $_SESSION['user_id'];

// Call a function to add the property to favorites
$success = addToFavorites($userId, $propertyId);

echo json_encode(['success' => $success]);
?>
