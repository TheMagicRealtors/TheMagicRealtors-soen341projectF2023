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
?>
