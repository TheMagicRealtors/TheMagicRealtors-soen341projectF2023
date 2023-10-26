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