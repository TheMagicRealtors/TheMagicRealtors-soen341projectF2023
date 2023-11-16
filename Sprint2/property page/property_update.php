?>
<?php
require 'loginRestrict.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateProperty"])) {
    $properties_id = $_POST['properties_id'];
    $newPrice = $_POST['price'];
    $newDescription = $_POST['description'];
    $newImage=$_POST['image_url'];

    include 'property_functions.php';

    // Get the existing property data
    $existingPropertyData = getPropertyData($properties_id);

    // Update fields only if they are not empty
    if (!empty($newPrice)) {
        $existingPropertyData['price'] = $newPrice;
    }

    if (!empty($newDescription)) {
        $existingPropertyData['description'] = $newDescription;
    }
    if (!empty($newImage)) {
        $existingPropertyData['image_url'] = $newImage;
    }
    

    
    // Perform the update with the modified data
    if (updateProperty($properties_id, $existingPropertyData['price'], $existingPropertyData['description'], $existingPropertyData['image_url'])) {
        header("Location: properties.php");
        exit();
    } else {
        echo "Failed to update the property. Debug Info: " . print_r($pdo->errorInfo(), true);
    }
    
    
}
?>