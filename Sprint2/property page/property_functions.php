<?php
require 'pdoConnect.php';
// function pdo_connect_mysql() { 
//     $DATABASE_HOST = 'localhost'; 
//     $DATABASE_USER = 'root'; 
//     $DATABASE_PASS = ''; 
//     $DATABASE_NAME = 'magicrealtors'; 
//     try { 
//         return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS); 
//     } catch (PDOException $exception) { 
//         exit('Failed to connect to database!'); 
//     } 
// }
// $pdo = pdo_connect_mysql();

function getProperty(){
    global $pdo; 
    $statement = $pdo->prepare('SELECT * FROM properties');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getPropertyFromAddress($address){
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM properties where address = ?');
    $statement->execute([$address]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
// function getUserType($userType){
//     global $pdo;
//     $statement = $pdo->prepare('SELECT * FROM users where user_type = :user_type');
//     $statement->execute([$userType]);
//     return $statement->fetch(PDO::FETCH_ASSOC);
// }


?>