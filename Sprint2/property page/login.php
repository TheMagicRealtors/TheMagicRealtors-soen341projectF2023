<?php
session_start();
include 'login_functions.php';
require 'header.php';

$errorMessage = '';

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
            if (password_verify($password, $user['password'])) {
                // Password is correct
                // You can set session variables and redirect the user to a secure page
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['logged_in'] = true;
                header("Location: properties.php");
                // exit();
            } else {
                // Password is incorrect
                $errorMessage = "Incorrect Password. Please try again.";
            }
        } else {
            // User not found
            $errorMessage = "User not found";
        }
    } catch (PDOException $e) {
        $errorMessage = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<style>
    html, body {
        height:100%;
        margin:0;
        padding:0;
    }
    .image_background {
        background: yellow;
        height: 100%;
        width: 100%;
        background-size: cover;
        background-image: url("property_images/property_6.jpg");
        opacity: 1;

        min-height: 380px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .loginForm {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* margin: auto; */
        width: 400px;
        padding: 16px;
        background-color: white;
        color: black;
    }
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }
    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }
    .loginButton {
        background-color: #000080;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .loginButton:hover {
        opacity: 1;
    }

    h1 {
        text-align: center;
    }

    p.error-message {
        color: red;
        text-align: center;
    }
</style>
<head>
    <link rel="stylesheet" type="text/css" href="myboringfilename.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="image_background">
        <form class="loginForm" method=POST>
            <h1><b>Login</b></h1>
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" required><br>

            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>

            <button type="submit" class="loginButton">Login</button>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        </form>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <?php
        require 'footer.php'
    ?>
</body>
</html>
