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
// function function_alert() { 
      
//     // Display the alert box  
//     echo "<script>alert("You have successfully submitted your offer. Click ok to returen to properties page. ");</script>"; 
// } 
$pdo = pdo_connect_mysql();
    if (isset($_POST['submit'])) {
        $broker_name_so = $_POST['broker_name_so'];
        $offer= $_POST['offer'];
   
    
        $conn = pdo_connect_mysql();
        $pdoQuery= "INSERT INTO `submit_offer`(`offer_id`, `broker_name_so`, `offer`) VALUES (NULL,:broker_name_so,:offer)";
  
        $pdoResult = $conn->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(":broker_name_so"=>$broker_name_so,":offer"=>$offer));
       
        if($pdoExec){
           echo 'You Submitted your offer.';
         
            header("Location: properties.php");
            exit();
            
        }else{
            echo 'Failed';
        }

    }

?>