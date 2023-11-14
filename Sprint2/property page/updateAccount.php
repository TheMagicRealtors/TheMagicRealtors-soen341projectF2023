<?php
    session_start();
include 'updateAccount_functions.php';
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
        
    </style>
    <head>
    <link rel="stylesheet" type="text/css" href="myboringfilename.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body>
    
    <div class="image_background">
    <form class="loginForm" method="POST">
    <h1><b>Update information</b1></h1>
    <label for=""><b>What kind of information do you want to change?</b></label><br><br>
    <input type="radio" name="user_type" value="1"> Personal Information &nbsp;
    <input type="radio" name="user_type" value="2"> Property Information 
   

    <!-- Personal Information Input Fields -->
    <div id="personalInfoFields" style="display: none;">
    <br>
    <label for="brokerName"><b>Broker Name</b></label>
        <input type="text" name="brokerName"><br>
     
        <label for="personal_info"><b>Choose type to update:</b></label><br>
        <input type="checkbox" name="personal_info" value="phone_number"> Phone Number &nbsp;
        <input type="checkbox" name="personal_info" value="email_address"> Email Address &nbsp;
        <input type="checkbox" name="personal_info" value="city"> City &nbsp;
        
        <div id="phone_number_field" style="display: none;">
            <label for="new_phone_number"><b>New Phone Number:</b></label>
            <input type="text" name="new_phone_number"><br>
        </div>

        <div id="email_address_field" style="display: none;">
            <label for="new_email_address"><b>New Email Address:</b></label>
            <input type="text" name="new_email_address"><br>
        </div>

        <div id="city_field" style="display: none;">
            <label for="new_city"><b>New City:</b></label>
            <input type="text" name="new_city"><br>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-outline-light" style="background-color:#000080; display: none;"  id="deleteAccountButton">Delete Account</button>

    <!-- Property Information Input Fields -->
    <div id="propertyInfoFields" style="display: none;">
    <br>
    <label for="property_number"><b>Property Number:</b></label>
    <input type="text" name="property_number"><br>
    <label for="personal_info"><b>Choose type to update:</b></label><br>
    <input type="checkbox" name="property_info" value="propertyPrice" id="propertyPriceCheckbox"> Property Price &nbsp;
    <input type="checkbox" name="property_info" value="propertyAvailability" id="propertyAvailabilityCheckbox"> Availability &nbsp;

    <div id="property_price" style="display: none;">
        <label for="new_property_price"><b>New Property Price:</b></label>
        <input type="text" name="new_property_price">
    </div>
    <div id="property_availability" style="display: none;">
        <label for="new_property_availability"><b>New Availability:</b></label>
        <input type="text" name="new_property_availability">
    </div>
</div> <br>
<button type="button" class="btn btn-outline-light" style="background-color:#000080; display: none;" id="deletePropertyButton">Delete Property</button>
</form>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
    <script>
    const personalInfoFields = document.getElementById('personalInfoFields');
    const propertyInfoFields = document.getElementById('propertyInfoFields');
    const deleteAccountButton = document.getElementById('deleteAccountButton');
    const deletePropertyButton = document.getElementById('deletePropertyButton');
    const propertyPriceCheckbox = document.getElementById('propertyPriceCheckbox');
    const propertyAvailabilityCheckbox = document.getElementById('propertyAvailabilityCheckbox');
    const propertyPriceField = document.getElementById('property_price');
    const propertyAvailabilityField = document.getElementById('property_availability');

    const personalInfoCheckboxes = document.querySelectorAll('input[type=checkbox][name=personal_info]');
    personalInfoCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const fieldName = `${checkbox.value}_field`;
            const field = document.getElementById(fieldName);
            if (checkbox.checked) {
                field.style.display = 'block';
            } else {
                field.style.display = 'none';
            }
        });
    });

    const personalInfoRadio = document.querySelector('input[type=radio][value="1"]');
    const propertyInfoRadio = document.querySelector('input[type=radio][value="2"]');

    personalInfoRadio.addEventListener('change', () => {
        if (personalInfoRadio.checked) {
            personalInfoFields.style.display = 'block';
            propertyInfoFields.style.display = 'none';
            deleteAccountButton.style.display = 'block';
            deletePropertyButton.style.display = 'none'; // Hide the "Delete Property" button
        }
    });

    propertyInfoRadio.addEventListener('change', () => {
        if (propertyInfoRadio.checked) {
            personalInfoFields.style.display = 'none';
            propertyInfoFields.style.display = 'block';
            deleteAccountButton.style.display = 'none'; // Hide the "Delete Account" button
            deletePropertyButton.style.display = 'block'; // Show the "Delete Property" button
        }
    });

    propertyPriceCheckbox.addEventListener('change', () => {
    if (propertyPriceCheckbox.checked) {
        propertyPriceField.style.display = 'block';
    } else {
        propertyPriceField.style.display = 'none';
    }
});
propertyAvailabilityCheckbox.addEventListener('change', () => {
    if (propertyAvailabilityCheckbox.checked) {
        propertyAvailabilityField.style.display = 'block';
    } else {
        propertyAvailabilityField.style.display = 'none';
    }
});


</script>




<script src="js/main.js"></script>
<!--<?php
        require 'footer.php'
    ?>-->


</body>
</html>