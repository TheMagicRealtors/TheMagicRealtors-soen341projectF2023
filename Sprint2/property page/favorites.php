<?php
session_start();
require 'header.php';
echo '<style>';
echo '.property-card {';
echo '    margin: 15px;';
echo '    flex: 0 0 100%;';
echo '    max-width: 100%;';
echo '}';
echo '';
echo '@media (min-width: 576px) {';
echo '    .property-card {';
echo '        flex: 0 0 100%;';
echo '        max-width: 100%;';
echo '    }';
echo '}';
echo '';
echo '@media (min-width: 768px) {';
echo '    .property-card {';
echo '        flex: 0 0 48%;';
echo '        max-width: 48%;';
echo '    }';
echo '}';
echo '@media (min-width:1200px) {';
echo '    .property-card {';
echo '        flex: 0 0 31%;';
echo '        max-width: 31%;';
echo '    }';
echo '}';
echo '';
echo '@media (max-width: 575px) {';
echo '    .availableProperties {';
echo '        white-space: nowrap;';
echo '        font-size: 16px;';
echo '    }';
echo '}';
echo '</style>';


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
            echo '<div class="card property-card mx-2 mb-3">';
            echo '<img src="' . $favorite['image_url'] . '" class="card-img-top" alt="..." style="height:80%;">';
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
<!--
<style>
.property-card {
    margin:15px;
    flex: 0 0 100%;
    max-width: 100%;
}

@media (min-width: 576px) {
    .property-card {
        flex: 0 0 100%;
        max-width: 100%;
    }

    
}

@media (min-width: 768px) {
    .property-card {
        flex: 0 0 48%;
        max-width: 48%;
    }
}
@media (min-width:1200px) {
    .property-card {
        flex: 0 0 31%;
        max-width: 31%;
    }
}
    
    @media (max-width: 575px) {
    .availableProperties {
        white-space: nowrap;
        font-size: 16px;

    }
}
</style>-->