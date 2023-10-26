<?php
include 'header.php';
include 'property_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = pdo_connect_mysql();

    $email = $_POST['email'];
    $availabilities = $_POST['availabilities'];
    $address = $_POST['address'];


    $sql = "INSERT INTO book_visit (email, availabilities, address) VALUES (:email, :availabilities, :address)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':availabilities', $availabilities, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo '<div><br></div><img src="property_images/checkmark.png" alt="checkmark" width="550" height="550"> <br>Booking submitted successfully. Thank you!<br>';
    } else {
        echo "Booking submission failed. Please try again.";
    }

}
include 'footer.php';
?>