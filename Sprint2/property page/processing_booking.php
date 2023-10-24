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
        echo "Booking submitted successfully. Thank you!";
    } else {
        echo "Booking submission failed. Please try again.";
    }

}
include 'footer.php';
?>
