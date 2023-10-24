<?php require 'header.php'; ?>

<div class="container-fluid">
<?php
include 'property_functions.php';

$conn = pdo_connect_mysql();

// Retrieve search criteria from the form
$city = $_POST['city'];

// Construct the SQL query based on the search criteria
$sql = "SELECT * FROM properties WHERE city = :city";

// Prepare the SQL query
$stmt = $conn->prepare($sql);

// Bind the city parameter
$stmt->bindParam(':city', $city, PDO::PARAM_STR);

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
                echo '<p class="card-text">' . $row['district'] . ', ' . $row['city'] . '</p>'; //change
                echo '<p class="card-text">' . 'Price: ' . $row['price'] .'$' .'</p>'; //change
                echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')">Show More</button>';
                echo '</div>';
                echo '</div>';
    }
    echo '</div>';
} else {
    echo "No properties match your search criteria.";
}
?>
</div>
<?php
include 'footer.php';
?>