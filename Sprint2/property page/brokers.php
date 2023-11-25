<?php
session_start();
require 'loginRestrict.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="brokers_stylescss.css">
    <title>The Magic Realtors</title>
    <style>
        .centered-form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50vh; 
            background-image: url("https://i.pinimg.com/736x/73/d6/f2/73d6f285447bb2762913bcf1c00fe87b.jpg");
        }

        .broker-search-form {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 50%;
        }
    </style>
</head>
<body>
    <!-- Header menu -->
    <?php include 'header.php'; ?>

    <div class="centered-form">
        <form class="broker-search-form" method="post" action="broker_search.php">
            <input class="form-control me-2" type="search" placeholder="Search Broker's Full Name" aria-label="Search" type="text" name="broker_name" id="broker_name">
            <button class="btn btn-outline-light" type="submit" value="Search" style="background-color: #000080;">Search</button>
        </form>
    </div>

    <div>
        <p style="font-size: 50px; color: black; text-align: center">Available Brokers</p>
    </div>

    <!-- Brokers -->
    <div class="container-fluid">
        <?php
        include 'brokers_functions.php';

        $brokers = getBrokerList();

        if (!empty($brokers)) {
            echo '<div class="row">';
            foreach ($brokers as $broker) {
                echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $broker['broker_name'] . '</h5>';
                echo '<p><i class="bi bi-geo-alt"></i> ' . $broker['broker_address'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo 'No brokers found.';
        }
        ?>
    </div>


    <?php 
      if((isset($_SESSION['user_id'])) &&((($_SESSION['user_type']) == 3)||(($_SESSION['user_type']) == 4)) ){
    include 'broker_forms.php'; 
      }
    ?>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
