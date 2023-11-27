<?php
session_start();
require 'header.php';

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
    $user_id = $_SESSION['user_id'];

    // Perform a database query to get favorite properties for the user
    // Adjust this based on your actual database structure and connection
    $stmt = $pdo->prepare("
        SELECT p.*
        FROM favorites f
        JOIN properties p ON f.property_id = p.properties_id
        WHERE f.user_id = ?
    ");
    $stmt->execute([$user_id]);
    $favorites = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($favorites) > 0) {
        echo '<div class="container-fluid", style="margin-top: 85px">';
        echo '<div class="row">';
        foreach ($favorites as $favorite) {
            echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
            echo '<img src="' . $favorite['image_url'] . '" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $favorite['address'] . '</h5>';
            echo '<p class="card-text">' . $favorite['district'] . ', ' . $favorite['city'] . '</p>';
            echo '<p class="card-text">' . 'Price: $' . $favorite['price']  .'</p>';
            echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $favorite['address'] . '\')">Show More</button>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    } else {
        echo '<p>No favorite properties yet.</p>';
    }
} else {
    echo '<p>Please log in to view your favorite properties.</p>';
}

include 'footer.php';
?>