<?php
require 'loginRestrict.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteProperty"])) {
    $properties_id = $_POST['properties_id'];

    include 'property_functions.php';

    if (deleteProperty($properties_id)) {
        header("Location: properties.php");
        exit();
    } else {
        echo "Failed to delete the property.";
    }
}
?>