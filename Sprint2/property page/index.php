<?php
function pdo_connect_mysql() { 
    $DATABASE_HOST = 'localhost'; 
    $DATABASE_USER = 'root'; 
    $DATABASE_PASS = ''; 
    $DATABASE_NAME = 'magicrealtors'; 
    try { 
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS); 
    } catch (PDOException $exception) { 
        exit('Failed to connect to database!'); 
    } 
}

$pdo = pdo_connect_mysql(); //have to create the pdo object inside index.php
$array = getUsers(); //change name

function getUsers() {
    global $pdo; //pdo is not defined inside getUsers, so global imports pdo defined earlier and will use that one
    $statement = $pdo->prepare('SELECT * FROM users');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC); //:: means we are referencing static method of PDO class
}

include 'properties.php';
//include 'property_functions.php';
    ?>