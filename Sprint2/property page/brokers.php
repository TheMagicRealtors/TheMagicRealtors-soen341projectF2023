<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/brokers_stylescss.css">
    <title>The Magic Realtors</title>
</head>
<body>
    <!-- Header menu -->
    <?php include 'header.php'; ?>

    <div>
        <h1 style="font-size: 72px;">AVAILABLE BROKERS</h1>
    </div>

    <!-- Brokers -->
    <div class="container-fluid">
        <?php
        include 'broker_functions.php';

        $brokers = getBrokerList();

        if (!empty($brokers)) {
            echo '<div class="row">';
            foreach ($brokers as $broker) {
                echo '<div class="card col-lg-4 col-md-6 col-sm-12">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $broker['broker_name'] . '</h5>';
                echo '<p class="card-text"><b>Personal Information:</b></p>';
                echo '<p><img src="BrokerImages/email_broker.png" alt="Email Icon"> <span class="email">' . $broker['broker_email'] . '</span></p>';
                echo '<p><img src="BrokerImages/phone_broker.png" alt="Phone Icon"> <span class="phone">' . $broker['broker_phone'] . '</span></p>';
                echo '<p><img src="BrokerImages/address_broker.png" alt="Address Icon"> <span class="address">' . $broker['broker_address'] . '</span></p>';
                echo '<a href="#" class="btn btn-outline-light" style="background-color: #000080;">Contact</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo 'No brokers found.';
        }
        ?>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
