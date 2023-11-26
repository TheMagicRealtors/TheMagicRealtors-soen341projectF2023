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

if (isset($_SESSION['user_id'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['properties_id'])) {
        $properties_id = $_POST['properties_id'];

        // Check if the property is already in favorites
        $favorites = isset($_SESSION['favorites']) ? $_SESSION['favorites'] : [];

        if (in_array($properties_id, $favorites)) {
            // If the property is in favorites, remove it
            $key = array_search($properties_id, $favorites);
            unset($favorites[$key]);
            echo 'Removed from favorites';
        } else {
            // If the property is not in favorites, add it
            $favorites[] = $properties_id;
            echo 'Added to favorites';
        }

        // Update the favorites session variable
        $_SESSION['favorites'] = $favorites;
    } else {
        echo 'Invalid request';
    }
} else {
    echo 'User not logged in';
}
?>