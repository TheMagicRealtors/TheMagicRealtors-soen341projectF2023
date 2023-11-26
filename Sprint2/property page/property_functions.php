<<<<<<< HEAD

=======
>>>>>>> 63e0bf8e5a334a24ef3d820ac7f00668e3e73e55
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
function createProperty($city, $district, $address, $house_type, $garage, $price, $nb_bedrooms, $nb_bathrooms, $description, $image_url = 'property_images/defaultHome.png') {
    global $pdo;

        // Check if description is not null or empty before inserting
        if ($description === null || $description === "") {
            return false; 
        }
    
        $stmt = $pdo->prepare("INSERT INTO properties (city, district, address, house_type, garage, price, nb_bedrooms, nb_bathrooms, description, image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$city, $district, $address, $house_type, $garage, $price, $nb_bedrooms, $nb_bathrooms, $description, $image_url]);
    }
    
function updateProperty($properties_id, $newPrice, $newDescription /*, $newImage*/) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE properties SET price = ?, description = ?/*, image_url = ?*/ WHERE properties_id = ?");
return $stmt->execute([$newPrice, $newDescription, $properties_id /*, $newImage*/]);
}
function deleteProperty($properties_id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM properties WHERE properties_id = ?");
    return $stmt->execute([$properties_id]);
}


function getPropertyData($properties_id)
{
    global $pdo;
    $stmt = $pdo->prepare('SELECT properties_id, city , district, address, price, garage, nb_bedrooms, nb_bathrooms, house_type, description  FROM properties WHERE properties_id = ?');
    $stmt->execute([$properties_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
<<<<<<< HEAD
function addToFavorites($userId, $propertyId) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO favorites (user_id, properties_id) VALUES (?, ?)");
    return $stmt->execute([$userId, $propertyId]);
}


// Remove a property from a user's favorites
/*function removeFromFavorites($user_id, $property_id) {
    global $pdo;

    $stmt = $pdo->prepare("DELETE FROM favorites WHERE user_id = ? AND property_id = ?");
    return $stmt->execute([$user_id, $property_id]);
}

function checkFavorite($user_id, $property_id) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM favorites WHERE user_id = ? AND property_id = ?");
    $stmt->execute([$user_id, $property_id]);

    return $stmt->fetchColumn() > 0;
}

*/
=======

>>>>>>> 63e0bf8e5a334a24ef3d820ac7f00668e3e73e55
?>