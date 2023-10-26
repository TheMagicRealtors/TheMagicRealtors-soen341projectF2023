<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "magicrealtors";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT broker_name, broker_email, broker_phone, broker_address FROM brokers";
$result = $conn->query($sql);

$data = array(); // Create an array to store the fetched data

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "No data found in the 'brokers' table.";
    }
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
