<?php
require 'loginRestrict.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["createProperty"])) {
    $city = $_POST['city'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $house_type=$_POST['house_type'];
    $garage=$_POST['garage'];
    $price=$_POST['price'];
    $nb_bedrooms=$_POST['nb_bedrooms'];
    $nb_bathrooms=$_POST['nb_bathrooms'];
    $description=$_POST['description'];
    $image_url=$_POST['image_url'];

    echo "Description: " . $description;


    include 'property_functions.php';

    if (createProperty($city, $district, $address, $house_type, $garage, $price, $nb_bedrooms, $nb_bathrooms, $description, $image_url)) {
        header("Location: properties.php");
        exit();
    } else {
        echo "Failed to create the property.";
    }
}
?>