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
$pdo = pdo_connect_mysql();

function getRent(){
    global $pdo; 
    $statement = $pdo->prepare('SELECT * FROM rent');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getRentFromAddress($address){
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM rent where address = ?');
    $statement->execute([$address]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

?>