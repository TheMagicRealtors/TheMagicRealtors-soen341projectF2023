<?php require 'header.php'; ?>

<div class="container-fluid">
<?php
include 'brokers_functions.php';

$conn = pdo_connect_mysql();

$broker_name = $_POST['broker_name']; // Use a different variable name for the search query

$broker_name = strtolower($broker_name);

$sql = "SELECT * FROM brokers WHERE LOWER(broker_name) = :broker_name";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':broker_name', $broker_name, PDO::PARAM_STR);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo '<div>
    <h1 style="font-size: 72px; color: white;">................................................</h1>
</div>';
    echo "<h2>Search Results</h2>";
    echo '<div class="row">';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['broker_name'] . '</h5>'; // Use $row to access database values
        echo '<p class="card-text"><b>Personal Information:</b></p>';
        echo '<p><span class="email">' . $row['broker_email'] . '</span>';
        echo '<p><span class="phone">' . $row['broker_phone'] . '</span>';
        echo '<p><span class="address">' . $row['broker_address'] . '</span>';
        echo '<a href="#" class="btn btn-outline-light" style="background-color: #000080;">Contact</a>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<div>
    <h1 style="font-size: 72px; color: white;">................................................</h1>
</div>';
    echo "No broker matches your search criteria.";
}
?>
</div>
<?php
include 'footer.php';
?>
