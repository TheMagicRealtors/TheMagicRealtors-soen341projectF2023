<?php
function pdo_connect_mysql()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'magicrealtors';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to the database!');
    }
}

$pdo = pdo_connect_mysql();

function getBrokerList()
{
    global $pdo;
    $statement = $pdo->query('SELECT broker_name, broker_email, broker_phone, broker_address FROM brokers');
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createBroker($name, $email, $phone, $address) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO brokers (broker_name, broker_email, broker_phone, broker_address) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$name, $email, $phone, $address]);
}

function updateBroker($name, $newEmail, $newPhone, $newAddress) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE brokers SET broker_email = ?, broker_phone = ?, broker_address = ? WHERE broker_name = ?");
    return $stmt->execute([$newEmail, $newPhone, $newAddress, $name]);
}

function deleteBroker($name) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM brokers WHERE broker_name = ?");
    return $stmt->execute([$name]);
}

function getBrokerData($name)
{
    global $pdo;
    $stmt = $pdo->prepare('SELECT broker_email, broker_phone, broker_address FROM brokers WHERE broker_name = ?');
    $stmt->execute([$name]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>