<?php
session_start();
    require 'header.php';

?>

<style>
    .property-card {
        margin:15px;
        flex: 0 0 100%;
        max-width: 100%;
    }

    @media (min-width: 576px) {
        .property-card {
            flex: 0 0 100%;
            max-width: 100%;
        }

        
    }

    @media (min-width: 768px) {
        .property-card {
            flex: 0 0 48%;
            max-width: 48%;
        }
    }
    @media (min-width:1200px) {
        .property-card {
            flex: 0 0 31%;
            max-width: 31%;
        }
    }
        
        @media (max-width: 575px) {
        .availableProperties {
            white-space: nowrap;
            font-size: 16px;

        }
    }
.centered-form {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50vh; 
    background-image: url("https://i.pinimg.com/736x/73/d6/f2/73d6f285447bb2762913bcf1c00fe87b.jpg");
}

.filter-form {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
    width: 50%;
}

.filter-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 16px;
}

.filter-form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 10px;
  }
.filter-form select option {
    font-size: 14px;
    color: #333;
}

</style>
<meta charset="UTF-8"> 
  <meta http-equiv="'X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/main.min.css">
  <title>The Magic Realtors</title>
<div>
        <h1 style="font-size: 72px; color: white;">................................................</h1>
    </div>

<!-- "Manage Properties" Button -->
<div class="container-fluid">
    <?php
if((isset($_SESSION['user_id'])) &&((($_SESSION['user_type']) == 3)||(($_SESSION['user_type']) == 4)) ){
     echo '<a class="btn btn-primary float-end mt-3 mr-2" id="managePropertiesButton" href="property_forms.php" style="background-color: #000080; ">Manage Properties</a>';
}
?>
    <!--<button class="btn btn-primary mt-3" onclick="window.location.href='property_forms.php'" style="background-color: #000080; float: right;">Manage Properties</button>-->
</div>

<div>
    <p style="font-size:50px; color:black;" class="ml-2">Available Properties For Rent<br> 
</div>

    <!-- Properties -->
    <div class="container-fluid">
       <?php
        include 'rent_functions.php';
        $conn = pdo_connect_mysql();
       ;
        // SQL query to retrieve property details
        $sql = "SELECT * FROM rent";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            echo '<div class="row">'; //add this
            while ($row = $result->fetch()) {
                echo '<div class="card property-card mx-2 mb-3">';
                echo '<img src="' . $row['image_url'] . '" class="card-img-top" alt="..." style="height: 80%;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['address'] . '</h5>';
                echo '<p class="card-text">' . $row['district'] . ', ' . $row['city'] . '</p>'; //change
                echo '<p class="card-text">' . 'Price per month: ' . $row['price'] .'$' .'</p>'; //change
               // echo '<a href="property.php" class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')>Show More</a>';
                
                echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="saveRentAddress(\'' . $row['address'] . '\')">Show More</button>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>'; //add this
        } else {
            echo 'No properties for rent found.';
        }
        ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    <script>
   document.addEventListener('DOMContentLoaded', function() {
    // Get the "Manage Properties" button and the property forms container
    const managePropertiesButton = document.getElementById('managePropertiesButton');
    const propertyForm = document.querySelector('.property-form');

    // Toggle the visibility of property forms when the button is clicked
    managePropertiesButton.addEventListener('click', function() {
        if (propertyForm.style.display === 'block') {
            propertyForm.style.display = 'none';
        } else {
            propertyForm.style.display = 'block';
        }
    });
});

</script>


    
    
<?php
include 'footer.php';
?>