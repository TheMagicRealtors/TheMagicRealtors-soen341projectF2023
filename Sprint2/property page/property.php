<?php
include 'property_functions.php';
require 'header.php';

if (isset($_GET['address'])) {
    $selectedAddress = $_GET['address'];
}

$property = getPropertyFromAddress($selectedAddress);

$garage = '';
if($property['garage'] == 0){
    $garage = 'This property does not possess a garage';
}else{
    $garage = "This property possesses a garage";
}

    echo '<div>'; 
    echo '<img src="'.$property['image_url']. '" class="d-block w-100" alt="House Image">';
    echo '<h1 style="color: dodgerblue;">' . $property['price'] . '$</h1>';
    echo '<h2>'. $property['house_type'] . '</h2>';
    echo '<h4>' . $property['address'] .', ' . $property['district'] . '</h4><br>';
    echo '<div style="background-color: rgb(236, 236, 236); padding: 30px;">';
    echo '<h2>Description</h2>';
    echo '<p>' . $property['description'] . '</p>';
    echo '</div>';
    echo '<div style="background-color: rgb(255, 255, 255); padding: 30px;">';
    echo '<h2>Interior and Exterior Features</h2>';
    echo '<table style="width: 1500px;">';
    echo '<tr><th>Interior</th></tr>';
    echo '<tr><td>' . $property['nb_bedrooms'] . ' bedroom(s)</td><td>'. $property['nb_bedrooms'] . ' bathroom(s)</td></tr>';
    echo '<tr><td><br></td></tr>';
    echo '<tr><th>Exterior</th></tr>';
    echo '<tr><td><b>Garage</b><br>' . $garage . '</td></tr>';
    echo '</table>';
    echo '</div>';
    echo '<div style="background-color: rgb(255, 255, 255); padding: 30px;">';
    echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="saveVisitAddress(\'' . $property['address'] . '\')">Book a Visit</button>';
    echo '</div>';
    echo '</div>';

    include 'footer.php';
?>