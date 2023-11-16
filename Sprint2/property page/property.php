<?php
// session_start();
include 'property_functions.php';
require 'header.php';


if (isset($_GET['address'])) {
    $selectedAddress = $_GET['address'];
}

$property = getPropertyFromAddress($selectedAddress);


$garage = '';
if($property['garage'] == 0){
    $garage = 'This property does not possess a garage';
}else{
    $garage = "This property possesses a garage";
}

    echo '<div>'; 
    echo '<img src="'.$property['image_url']. '" class="d-block w-100" alt="House Image">';
    echo '<h1 style="color: dodgerblue;">' . $property['price'] . '$</h1>';
    echo '<h2>'. $property['house_type'] . '</h2>';
    echo '<h4>' . $property['address'] .', ' . $property['district'] . '</h4><br>';
    echo '<div style="background-color: rgb(236, 236, 236); padding: 30px;">';
    echo '<h2>Description</h2>';
    echo '<p>' . $property['description'] . '</p>';
    echo '</div>';
    echo '<div style="background-color: rgb(255, 255, 255); padding: 30px;">';
    echo '<h2>Interior and Exterior Features</h2>';
    echo '<table style="width: 1500px;">';
    echo '<tr><th>Interior</th></tr>';
    echo '<tr><td>' . $property['nb_bedrooms'] . ' bedroom(s)</td><td>'. $property['nb_bedrooms'] . ' bathroom(s)</td></tr>';
    echo '<tr><td><br></td></tr>';
    echo '<tr><th>Exterior</th></tr>';
    echo '<tr><td><b>Garage</b><br>' . $garage . '</td></tr>';
    echo '</table>';
    echo '</div>';
    echo '<div style="background-color: rgb(255, 255, 255); padding: 30px;">';
    echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="saveVisitAddress(\'' . $property['address'] . '\')">Book a Visit</button>';
    // if($userType == '2'){
        echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="submitOffer()">Make Offer</button>';
    // }

    
    echo '</div>';
    echo '</div>';

//     global $price;
//    $price = . $property['price'] .;

    
?>

<!DOCTYPE html>
<html>
    <style>
        .loginButton {
            background-color: #000080;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 130px;
            opacity: 0.9;
        }

        .loginButton:hover {
            opacity: 1;
        }

        .loginForm {
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

    .loginButton {
        background-color: #000080;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
    
    </style>
    <head>
    <link rel="stylesheet" type="text/css" href="myboringfilename.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body>
   <!-- <button type="button" onclick="window.location.href = 'submitOffer.php';" class="loginButton">Submit Offer</button> -->

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <br>
    <br>
    

    <form class="loginForm" method=POST>
            <h1><b>Motgage Calculator</b></h1>
            <label for="rate"><b>Price</b></label><br>
            <input type="text" placeholder="price" id='price' name="price" required><br>

            <label for="rate"><b>Annual Interest Rate in Percentage</b></label><br>
            <input type="text" placeholder="Annual Rate" id='rate' name="rate" required><br>

            <label for="down"><b>Down Payment</b></label><br>
            <input type="text" placeholder="Enter Amount" id='down' name="down" required><br>

            <label for="down"><b>Mortgage Term</b></label><br>
            <input type="text" placeholder="Enter Amount" id='down' name="years" required><br>

            <button type="submit" class="loginButton" >Calculate</button>
            <p id="result":>Result: </p>
            <p class="error-message"><?php echo $errorMessage; ?></p>
     </form>
     
     <script>
        // let rate;
        // let down;
        let price;
        // let motgage;
       // value="//<?php //echo  . $property['price'] . ; ?>


        // function calculator(){
        //     var rate = parseFloat(document.getElementById('rate').value)/12;
        //     var price = parseFloat(document.getElementById('price').value);
        //     var principal = price - parseFloat(document.getElementById('down').value);
        //     var term =parseFloat(document.getElementById('years').value);
        //     var mortgage = principal * ((rate * Math.pow((1+ rate), term))/(Math.pow((1+ rate), term) -1));

        //     document.getElementById('result').textContent = 'Result: ' + mortgage;

        // }

    </script>
   
</body>
</html>

        <?php
        include 'footer.php';
    ?>
