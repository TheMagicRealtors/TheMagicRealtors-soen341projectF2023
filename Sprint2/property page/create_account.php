<?php

    include 'create_account_functions.php';
    require 'header.php';
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
        .CAForm {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* margin: auto; */
            width: 600px;
            padding: 16px;
            background-color: white;
            color: black;
        }
        input[type=text] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus {
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

        input[type="radio"]{
            margin: 0 10px 0 10px;
        }
  
    </style>


<body>
    <div class="background-image">
        <h1 style="font-size: 72px;">AVAILABLE PROPERTIES</h1>
    </div >
    <div class= image_background >
        <form method= POST class="CAForm">
            <h1 style=text-align:center><b>Create Account</b></h1>
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" required><br>

            <label for="passwords"><b>Password</b></label><br>
            <input type="text" placeholder="Enter Password" name="passwords" required><br>

            <label for="full_name"><b>Full Name</b></label><br>
            <input type="text" placeholder="Full Name" name="full_name" required><br>

            <label for=""><b>What type of user are you?</b></label><br><br>
             <input type="radio" name="user_type" value=1>Homebuyer 
             <input type="radio" name="user_type" value=2>Property Renter
             <input type="radio" name="user_type" value=2>Broker
             <input type="radio" name="user_type" value=2>System Administrator
            <br><br>
            <button type="submit" class="loginButton" name=submit style="background-color: #000080;color:white" >Create Account!</button><br>
            

        </form>
     
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
<?php
 require 'footer.php';
 ?>