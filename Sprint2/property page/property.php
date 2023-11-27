<?php
session_start();
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

    echo '<div class="container-fluid">'; 
    echo '<img src="'.$property['image_url']. '" class="d-block w-100" alt="House Image">';
    echo '<h1 style="color: dodgerblue;" class="m-3">$' . $property['price'] . '</h1>';
    echo '<h2 class="m-3">'. $property['house_type'] . '</h2>';
    echo '<h4 class="m-3">' . $property['address'] .', ' . $property['district'] . '</h4><br>';
    echo '<div style="background-color: rgb(236, 236, 236); padding: 30px;">';
    echo '<h2>Description</h2>';
    echo '<p class="container">' . $property['description'] . '</p>';
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
    if((isset($_SESSION['user_id'])) &&((($_SESSION['user_type']) == 1)||(($_SESSION['user_type']) == 3)||(($_SESSION['user_type']) == 4))){
    echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="saveVisitAddress(\'' . $property['address'] . '\')">Book a Visit</button>';
    }
    if((isset($_SESSION['user_id'])) &&((($_SESSION['user_type']) == 3)||(($_SESSION['user_type']) == 4)) ){
        echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="submitOffer()">Make Offer</button>';
     }

    
    echo '</div>';
    echo '</div>';

    global $price;
   $price = $property['price'];

    
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
        position: relative;
        top: 150px;
        left: 250px;
        transform: translate(-50%, -50%);
        /* margin: auto; */
        width: 500px;
        padding: 16px;
        background-color: rgb(236, 236, 236);
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
    .mortgageButton {
        background-color: #000080;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 40%;
        height:50px;
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
    

    <div class="container" style="margin-left: 50%;">
    <form class="loginForm" style="text-align: center;" method=POST onsubmit="calculator(); return false;">
            <h1><b>Mortgage Calculator</b></h1>
            <label for="rate"><b>Price</b></label><br>
            <input type="text" placeholder="price" id='price' name="price" value = "<?php echo htmlspecialchars($price); ?>" required><br>

            <label for="rate"><b>Annual Interest Rate in Percentage</b></label><br>
            <input type="text" placeholder="Annual Rate" id='rate' name="rate" required><br>

            <label for="down"><b>Down Payment</b></label><br>
            <input type="text" placeholder="Enter Amount" id='down' name="down" required><br>

            <label for="years"><b>Mortgage Term</b></label><br>
            <input type="text" placeholder="Enter Amount" id='years' name="years" required><br><br>

            <button type="submit" class="mortgageButton" onclick="calculator()" >Calculate</button>
     </form>
     <h1 id="result" class="result"></h1>
</div>
     
     <script>
        function calculator(){
            var rate = (parseFloat(document.getElementById('rate').value)/100)/12;
            console.log(rate);
            var price = parseFloat(document.getElementById('price').value);
            console.log(price);
            var principal = price - parseFloat(document.getElementById('down').value);
            console.log(principal);

            var term =parseFloat(document.getElementById('years').value) * 12;
            console.log(term);
            var mortgage = principal * ((rate * Math.pow((1+ rate), term))/(Math.pow((1+ rate), term) -1));

            document.getElementById("result").innerText = 'Monthly Payment: $' + mortgage.toFixed(2);
            console.log(mortgage);

        }

    </script>
   
</body>
</html>

        <?php
        include 'footer.php';
    ?>