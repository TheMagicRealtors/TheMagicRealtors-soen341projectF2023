

<!DOCTYPE html>
<html>
    <style>
        .loginForm {
            position: center;
            margin: auto;
            max-width: 500px;
            padding: 16px;
            background-color: white;
        }
    </style>
    <head>
    <link rel="stylesheet" type="text/css" href="myboringfilename.css">
    </head>
<?php
    include 'property_functions.php';
    require 'header.php';
?>
<?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $passwords= $_POST['passwords'];
        $full_name = $_POST['full_name'];
        $user_type = $_POST['user_type'];
    
        $conn = pdo_connect_mysql();
        $pdoQuery= "INSERT INTO `users`(`id`, `email`, `passwords`, `full_name`, `user_type`) VALUES (NULL,:email, :passwords,:full_name,:user_type)";
  
        $pdoResult = $conn->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(":email"=>$email,":passwords"=>$passwords,":full_name"=>$full_name,":user_type"=>$user_type));
       
        if($pdoExec){
            
            header("Location: properties.php");
            exit();
            
        }else{
            echo 'Failed';
        }


    }

?>
<body>
    <div class="background-image">
        <h1 style="font-size: 72px;">AVAILABLE PROPERTIES</h1>
    </div>
        <form method= POST class="loginForm">
            <h1>Create Account</h1>
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" required><br>

            <label for="passwords"><b>Password</b></label><br>
            <input type="text" placeholder="Enter Password" name="passwords" required><br>

            <label for="full_name"><b>Full Name</b></label><br>
            <input type="text" placeholder="Full Name" name="full_name" required><br>

            <label for=""><b>What type of user are you?</b></label><br>
            1-Homebuyer<br>
            2-Property Renter<br>
            3-Broker<br>
            4-System Administrator<br>
            <input type="number" placeholder="user type (enter number)" name="user_type" required><br>

            <!-- <select name="user_type" id="user_type">
                <option value="Homebuyers">Homebuyers</option>
                <option value="Property Renters">Property Renters</option>
                <option value="Brokers">Brokers</option>
                <option value="System Administrator">System Administrator</option>
             </select><br> -->

            <button type="submit" class="btn" name=submit>Create Account!</button><br>
            

        </form>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
