<?php
require 'loginRestrict.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateBroker"])) {
    $brokerName = $_POST['broker_name'];
    $newEmail = $_POST['broker_email'];
    $newPhone = $_POST['broker_phone'];
    $newAddress = $_POST['broker_address'];

    include 'brokers_functions.php';

    // Get the existing broker data
    $existingBrokerData = getBrokerData($brokerName);

    // Update fields only if they are not empty
    if (!empty($newEmail)) {
        $existingBrokerData['broker_email'] = $newEmail;
    }

    if (!empty($newPhone)) {
        $existingBrokerData['broker_phone'] = $newPhone;
    }

    if (!empty($newAddress)) {
        $existingBrokerData['broker_address'] = $newAddress;
    }

    // Perform the update with the modified data
    if (updateBroker($brokerName, $existingBrokerData['broker_email'], $existingBrokerData['broker_phone'], $existingBrokerData['broker_address'])) {
        header("Location: brokers.php");
        exit();
    } else {
        echo "Failed to update the broker.";
    }
}
?>