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

// session_start();
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform database validation here using PDO
    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare a SQL statement to select user data by email
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // User found, now verify the password
            if ($password == $user['passwords']) {
                // Password is correct
                // You can set session variables and redirect the user to a secure page
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION["logged_in"] = true; 
                header("Location: properties.php");
               // exit();
            } else {
                // Password is incorrect
                echo "Invalid password";
            }
        } else {
            // User not found
            echo "User not found";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>