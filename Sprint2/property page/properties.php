<?php
    require 'header.php';
?>

<style>
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
<div>
        <h1 style="font-size: 72px; color: white;">................................................</h1>
    </div>
    <div>
        <h1 style="font-size: 72px;">AVAILABLE PROPERTIES</h1>
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
  <option value="one">1</option>
  <option value="two">2</option>
  <option value="three">3</option>
  <option value="four">4</option>
  <option value="five">5</option>
</select>

<label for="house">House Type</label>
<select name="house" id="house">
  <option value=""></option> 
  <option value="duplex">Duplex</option>
  <option value="condonomium">Condonomium</option>
  <option value="two-storey">Two-Storey</option>
  <option value="bungalow">Bungalow</option>
  <option value="">5</option>
</select>

<button class="btn btn-outline-light" type="submit" value = "apply" style="background-color:#000080; ">Apply</button>
    </form> 
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
                echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
                echo '<img src="' . $row['image_url'] . '" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['address'] . '</h5>';
                echo '<p class="card-text">' . $row['district'] . ', ' . $row['city'] . '</p>'; //change
                echo '<p class="card-text">' . 'Price: ' . $row['price'] .'$' .'</p>'; //change
               // echo '<a href="property.php" class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')>Show More</a>';
                echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')">Show More</button>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>'; //add this
        } else {
            echo 'No properties found.';
        }
        // Close the database connection
        //$conn->close();
        ?>
        
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php
include 'footer.php';
?>