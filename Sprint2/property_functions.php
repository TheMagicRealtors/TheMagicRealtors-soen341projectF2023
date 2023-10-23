<?php

$pdo = pdo_connect_mysql();

function getProperty(){
    global $pdo; 
    $statement = $pdo->prepare('SELECT * FROM properties');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$prop = getProperty();

echo $prop['address'];


?>