<?php
require 'loginRestrict.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["createBroker"])) {
    $brokerName = $_POST['broker_name'];
    $brokerEmail = $_POST['broker_email'];
    $brokerPhone = $_POST['broker_phone'];
    $brokerAddress = $_POST['broker_address'];

    include 'brokers_functions.php';

    if (createBroker($brokerName, $brokerEmail, $brokerPhone, $brokerAddress)) {
        header("Location: brokers.php");
        exit();
    } else {
        echo "Failed to create the broker.";
    }
}
?>
