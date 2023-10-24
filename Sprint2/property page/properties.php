<?php
require_once("header.php");
?>

    <div>
        <h1 style="font-size: 72px;">AVAILABLE PROPERTIES</h1>
    </div>

    <div class="container-fluid">
        <?php

        include'property_functions.php';  
        $conn = pdo_connect_mysql();

        $sql = "SELECT * FROM properties";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            echo '<div class="row">';
            while ($row = $result->fetch()) {
                echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
                echo '<img src="' . $row['image_url'] . '" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['address'] . '</h5>';
                echo '<p class="card-text">' . $row['district'] . ', ' . $row['city'] . '</p>';
                echo '<p class="card-text">' . 'Price: ' . $row['price'] . '$' .'</p>';
                echo '<button class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')">Show More</button>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';

        } else {
            echo 'No properties found.';
        }

        ?>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php
require_once("footer.php");
?> 

