<?php
    require 'header.php';
?>
    <div>
        <h1 style="font-size: 72px;">AVAILABLE BROKERS</h1>
    </div>

    <!-- Properties -->
    <div class="container-fluid">
       
       <?php
        include 'brokers_functions.php';
        $conn = pdo_connect_mysql();

        // SQL query to retrieve property details
        $sql = "SELECT * FROM properties";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            echo '<div class="row">'; //add this
            while ($row = $result->fetch()) {
                echo '<div class="card">';
                echo '<img src="BrokerImages/broker_pic.png" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">${broker.broker_name}</h5>';
                echo '<p class="card-text"><b>Personal Information:</b></p>'; //change
                echo '<p><img src="BrokerImages/email_broker.png" alt="Email Icon"> <span class="email">${broker.broker_email}</span></p>';
               // echo '<a href="property.php" class="btn btn-outline-light" style="background-color: #000080;" onclick="savePropertyAddress(\'' . $row['address'] . '\')>Show More</a>';
                echo '<p><img src="BrokerImages/phone_broker.png" alt="Phone Icon"> <span class="phone">${broker.broker_phone}</span></p>';
                echo '<p><img src="BrokerImages/address_broker.png" alt="Address Icon"> <span class="address">${broker.broker_address}</span></p>';
                echo '<a href="#" class="btn btn-outline-light" style="background-color: #000080;">Contact</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>'; //add this
        } else {
            echo 'No brokers found.';
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