<?php
require 'loginRestrict.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteBroker"])) {
    $brokerName = $_POST['broker_name'];

    include 'brokers_functions.php';

    if (deleteBroker($brokerName)) {
        header("Location: brokers.php");
        exit();
    } else {
        echo "Failed to delete the broker.";
    }
}
?>
