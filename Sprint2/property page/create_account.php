

<!DOCTYPE html>
<html>
    <style>
        .createAccountForm {
            position: center;
            margin: auto;
            max-width: 600px;
            padding: 16px;
            left:50%;
            right:50%;
            transform: translate(-50%,-505);
            background-color: white;
            color:#000080;
            text-align:center;
        }

        input[type=text]{
            width:100%;
            padding:15px;
            margin:5px 0 22px 0;
            border:none;
            background:#f1f1f1;
        }

        input[type=text]:focus{
            backgroud-colour:#ddd;
            outline:none;
        }

        input[type="radio"]{
            margin: 0 10px 0 10px;
        }
  
    </style>
    <head>
    <link rel="stylesheet" type="text/css" href="myboringfilename.css">
    </head>
<?php
    include 'property_functions.php';
    // include 'create_account_function.php';
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
    </div >
    <div style="font: 95% Arial, Helvetica, sans-serif; padding: 16px;background: #F7F7F7;">
        <form method= POST class="createAccountForm">
            <h1 style=text-align:center>Create Account</h1>
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
            <button type="submit" class="btn" name=submit style="background-color: #000080;color:white" >Create Account!</button><br>
            

        </form>
     
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
<?php
 require 'footer.php';
 ?>