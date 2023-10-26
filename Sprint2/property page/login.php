<?php
    session_start();
    include 'login_functions.php';
    require 'header.php';
?>


<!DOCTYPE html>
<html>
    <style>
        .loginForm {
            position: center;
            margin: auto;
            max-width: 300px;
            padding: 16px;
            background-color: white;
        }
        
    </style>
    <head>
    <link rel="stylesheet" type="text/css" href="myboringfilename.css">
    </head>

<body>
    <div class="background-image">
        <h1 style="font-size: 72px;">AVAILABLE PROPERTIES</h1>
    </div>
        <form class="loginForm" method=POST>
            <h1>Login</h1>
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" required><br>

            <label for="password"><b>Password</b></label><br>
            <input type="text" placeholder="Enter Password" name="password" required><br>

            <button type="submit" class="btn">Login</button><br>

            If you do not have an account click here!<br>
             <button type="submit" value="login" class="btn">Create Account</button>
            

        </form>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>