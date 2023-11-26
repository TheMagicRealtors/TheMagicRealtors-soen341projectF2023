<?php
session_start();
require 'header.php';
require_once 'db_connect.php'; // Adjust the file name as per your database connection file

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Perform a database query to get favorite properties for the user
    // Adjust this based on your actual database structure and connection
    $stmt = $pdo->prepare("
        SELECT p.address
        FROM favorites f
        JOIN properties p ON f.properties_id = p.properties_id
        WHERE f.user_id = ?
    ");
    $stmt->execute([$user_id]);
    $favorites = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($favorites) > 0) {
        echo '<h2>Your Favorite Properties:</h2>';
        echo '<ul>';
        foreach ($favorites as $favorite) {
            echo '<li>' . htmlspecialchars($favorite['address']) . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No favorite properties yet.</p>';
    }
} else {
    echo '<p>Please log in to view your favorite properties.</p>';
}

include 'footer.php';
?>