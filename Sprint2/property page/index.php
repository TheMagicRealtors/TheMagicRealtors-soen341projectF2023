<?php
//function pdo_connect_mysql() {
//    $DATABASE_HOST = 'localhost';
//    $DATABASE_USER = 'root';
//    $DATABASE_PASS = '';
//    $DATABASE_NAME = 'magicrealtors';
//    try {
//        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
//    } catch (PDOException $exception) {
//        exit('Failed to connect to database!');
//    }
//}

//$pdo = pdo_connect_mysql();
//function getUsers() {
//    global $pdo;
//    $statement = $pdo->prepare('SELECT*FROM users');
//    $statement->execute();
//    return $statement->fetchAll(PDO::FETCH_ASSOC);
//}

//$array=getUsers();
//foreach ($array as $key => $value) {
//    echo "Key: $key, Value: ";
//    foreach ($value as $subkey => $subvalue) {
//        echo "[$subkey] => $subvalue ";
//   }
//    echo "<br>";
//}


//include 'home.html'
include 'properties.php'

?>