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


<div class="centered-form">
    <form method="post" action="filter.php" class="filter-form">
        <p style = "text-align:center; font-weight:bold;">Filter Options</p>

<label for="price">Price</label>
<select name="price" id="price">
  <option value=""></option> 
  <option value="below">Below 500,000$</option>
  <option value="over">Over 500,000$</option>
</select>

<label for="bed">Bedrooms</label>
<select name="bed" id="bed">
  <option value=""></option> 
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

<label for="house">House Type</label>
<select name="house" id="house">
  <option value=""></option> 
  <option value="Duplex">Duplex</option>
  <option value="Condominium">Condominium</option>
  <option value="Two-Storey House">Two-Storey House</option>
  <option value="Bungalow">Bungalow</option>
</select>

<button class="btn btn-outline-light" type="submit" value = "apply" style="background-color:#000080; ">Apply</button>
    </form> 
</div>
<!-- "Manage Properties" Button -->

<div class="container-fluid">
<!-- <a class="btn btn-primary float-end mt-3" id="managePropertiesButton" href="property_forms.php" style="background-color: #000080; ">Manage Properties</a> -->
<?php

  if((isset($_SESSION['user_id'])) &&((($_SESSION['user_type']) == 3)||(($_SESSION['user_type']) == 4)) ){
    echo '<a class="btn btn-primary float-end mt-3" id="managePropertiesButton" href="property_forms.php" style="background-color: #000080; ">Manage Properties</a>';
  }
  ?>
  </div>

<div>

    <p style="font-size:50px; color:black;" class="p-2">Available Properties </p><br>
    
    <button> <a href="sort_newest.php" class="btn btn-primary ml-2" style="background-color:#000080;"><i class="bi bi-arrow-down-up"></i>&nbsp;&nbsp;Sort by Newest</a>

</button> 
 
</div>

    <!-- Properties -->
    <div class="container-fluid">
    <div class="row">
        <?php
        include 'property_functions.php';
        $conn = pdo_connect_mysql();

        // Assuming $user_id is set somewhere in your code
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
            // SQL query to retrieve property details and check favorite status
            $sql = "SELECT p.*, f.user_id AS favorite_user_id
                    FROM properties p
                    LEFT JOIN favorites f ON p.properties_id = f.property_id AND f.user_id = :user_id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute(); 

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch()) {
                echo '<div class="card property-card mx-2 mb-3">';
                echo '<img src="' . $row['image_url'] . '" class="card-img-top mt-2" alt="..." style="height:80%;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['address'] . '</h5>';
                echo '<p class="card-text">' . $row['district'] . ', ' . $row['city'] . '</p>';
                echo '<p class="card-text">' . 'Price: $' . $row['price']  .'</p>';
                
                $isFavorite = !empty($row['favorite_user_id']);
                $heartColor = $isFavorite ? 'red' : 'black';

                echo '<span class="favorite-icon" data-property-id="' . $row['properties_id'] . '" style="color: ' . $heartColor . '; float: right; cursor: pointer; font-size: 30px;" onclick="toggleFavorite(' . $row['properties_id'] . ')">&#x2661;</span>';
                echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')">Show More</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No properties found.';
        }
        ?>
    </div>
</div>

<script>
    function toggleFavorite(propertyId) {
    // Check if the user is logged in
    <?php if(isset($_SESSION['user_id'])) { ?>
        // You can use AJAX to call addToFavorites.php and update the UI dynamically
        // For simplicity, let's assume you have a working addToFavorites.php
        // You can implement this function using JavaScript fetch or jQuery.ajax
        fetch('addToFavorites.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'property_id=' + propertyId,
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // Display the message returned by addToFavorites.php
            // Optionally, you can update the UI here based on the response
            location.reload(); // Refresh the page to reflect changes
        })
        .catch(error => console.error('Error:', error));
    <?php } else { ?>
        // Redirect to the login page if the user is not logged in
        window.location.href = 'login.php';
    <?php } ?>
}

</script>


<?php
include 'footer.php';
?>
