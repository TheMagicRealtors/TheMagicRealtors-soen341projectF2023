<?php
    require 'header.php';
?>
<head>
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
  <script>
  function addToFavorites(propertyId) {
    // Make an AJAX request to add the property to favorites
    // You can use vanilla JavaScript or a library like jQuery
    // Example using fetch:
    fetch('addToFavorites.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ propertyId: propertyId }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Property added to favorites!');
        } else {
            alert('Failed to add property to favorites.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>
</head>
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
     <a class="btn btn-primary float-end mt-3 mr-2" id="managePropertiesButton" href="property_forms.php" style="background-color: #000080; ">Manage Properties</a>
    <!--<button class="btn btn-primary mt-3" onclick="window.location.href='property_forms.php'" style="background-color: #000080; float: right;">Manage Properties</button>-->
</div>

<div>
    <p style="font-size:50px; color:black; font-family: Arial;" class="p-2 availableProperties">Available Properties <br> 
    <button href="sort_newest.php" style=" background-color:#000080" class="btn btn-primary ml-2"><i class="bi bi-arrow-down-up"></i>&nbsp;&nbsp;Sort by Newest</button></p> 
</div>

    <!-- Properties -->
    <div class="container-fluid">
       <?php
        include 'property_functions.php';
        $conn = pdo_connect_mysql();

        // SQL query to retrieve property details
        $sql = "SELECT * FROM properties";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            echo '<div class="row">'; //add this
            while ($row = $result->fetch()) {
                echo '<div class="property-card mx-2 card mb-3">';
                echo '<img src="' . $row['image_url'] . '" class="card-img-top mt-2" alt="..." style="height:80%;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['address'] . '</h5>';
                echo '<p class="card-text" style="font-weight: bold; font-style: italic;">' . $row['district'] . ', ' . $row['city'] . '</p>'; //change
                echo '<p class="card-text">' . 'Price: $' . $row['price']  .'</p>'; //change
               // echo '<a href="property.php" class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')>Show More</a>';
                echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')">Show More</button>';
                echo '<button class="btn btn-danger float-end"  onclick="addToFavorites(' . $row['properties_id'] . ')">';
        echo '<i class="bi bi-heart"></i></button>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>'; //add this
        } else {
            echo 'No properties found.';
        }
        ?>
        
    </div>

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