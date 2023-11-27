<?php
session_start();

// Database connection details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'magicrealtors';

try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    exit('Failed to connect to the database!');
}

if (isset($_POST['property_id']) && isset($_SESSION['user_id'])) {
    $property_id = $_POST['property_id'];
    $user_id = $_SESSION['user_id'];

    // Check if the property is not already in favorites
    if (!isPropertyInFavorites($pdo, $user_id, $property_id)) {
        // Insert into the favorites table
        addToFavoritesInDatabase($pdo, $user_id, $property_id);
        echo 'Property added to favorites successfully.';
    } else {
        // Remove from the favorites table
        removeFromFavoritesInDatabase($pdo, $user_id, $property_id);
        echo 'Property removed from favorites successfully.';
    }
} else {
    echo 'Invalid request.';
}

// Helper function to check if a property is in favorites
function isPropertyInFavorites($pdo, $user_id, $property_id) {
    $stmt = $pdo->prepare("SELECT * FROM favorites WHERE user_id = ? AND property_id = ?");
    $stmt->execute([$user_id, $property_id]);
    return $stmt->fetch() !== false;
}

// Helper function to add a property to favorites in the database
function addToFavoritesInDatabase($pdo, $user_id, $property_id) {
    $stmt = $pdo->prepare("INSERT INTO favorites (user_id, property_id) VALUES (?, ?)");
    $stmt->execute([$user_id, $property_id]);
}

// Helper function to remove a property from favorites in the database
function removeFromFavoritesInDatabase($pdo, $user_id, $property_id) {
    $stmt = $pdo->prepare("DELETE FROM favorites WHERE user_id = ? AND property_id = ?");
    $stmt->execute([$user_id, $property_id]);
}
?>
