<?php
require 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'property_functions.php';

    $conn = pdo_connect_mysql();

    // Retrieve and sanitize search criteria from the form
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $bed = isset($_POST['bed']) ? $_POST['bed'] : '';
    $house = isset($_POST['house']) ? $_POST['house'] : '';

    // Initialize the SQL query
    $sql = "SELECT * FROM properties WHERE 1 = 1"; 

    // Add conditions to the query based on the form inputs
    if (!empty($price)) {
        if ($price === 'below') {
            $sql .= " AND price < 500000"; 
        } elseif ($price === 'over') {
            $sql .= " AND price >= 500000"; 
        }
    }

    if (!empty($bed)) {
        $sql .= " AND nb_bedrooms = " . intval($bed); 
    }

    if (!empty($house)) {
        $sql .= " AND house_type = '" . $house . "'"; 
    }

    // Prepare the SQL query
    $stmt = $conn->prepare($sql);

    // Execute the query
    $stmt->execute();

    // Display the search results
    if ($stmt->rowCount() > 0) {
        echo "<h2>Search Results</h2>";
        echo '<div class="row">';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
            echo '<img src="' . $row['image_url'] . '" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['address'] . '</h5>';
            echo '<p class="card-text">' . $row['district'] . ', ' . $row['city'] . '</p>';
            echo '<p class="card-text">' . 'Price: $' . $row['price'] . '</p>';
            echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')">Show More</button>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No properties match your search criteria.";
    }

}
?>
