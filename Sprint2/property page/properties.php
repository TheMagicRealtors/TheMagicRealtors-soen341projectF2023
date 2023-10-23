<?php
    require 'header.php';
?>
    <div>
        <h1 style="font-size: 72px;">AVAILABLE PROPERTIES</h1>
    </div>

    <!-- Properties -->
    <div class="container-fluid">
        <?php

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

</body>
</html>