
<?php
  require 'header.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta http-equiv="'X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!--Files-->
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/main.min.css">
  <link rel="stylesheet" href="css/homePagestyle.css">

    <title> The Magic Realtors</title>
</head>
<body class="bg-light"> 
<div class="container-fluid p-4 mb-2 titlePart" style="margin-top:70px;">
<h1 style="text-align:center; ">The Magic Realtors</h1>
<p style="text-align: center;">Find the perfect property that matches your dreams. We're your trusted partners in real estate.</p>

</div>
<div class="container-fluid">
    <div class="row m-4 p-4">
      <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
        <div class="card" style="border-radius: 30px;">
          <i class="bi bi-house-check" style="font-size: 100px; text-align: center;"></i>
            <div class="card-body">
                <h5 class="card-title text-center px-2" style="text-align: center;">Search for Properties</h5>

            </div>
          </div>
    </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
            <div class="card" style="border-radius: 30px;">
              <i class="bi bi-bookmark-heart"  style="font-size: 100px; text-align: center;"></i>
                <div class="card-body">
                    <h5 class="card-title text-center px-2" style="text-align: center;">Favorite your Properties</h5>

                </div>
              </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
            <div class="card " style="border-radius: 30px;">
              <i class="bi bi-person-check" style="font-size: 100px; text-align: center;"></i>
                <div class="card-body">
                    <h5 class="card-title text-center px-2"  style="text-align: center;">Connect with a broker</h5>
              </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
            <div class="card" style="border-radius: 30px;">
              <i class="bi bi-calculator" style="font-size: 100px; text-align: center;"></i>
                <div class="card-body">
                    <h5 class="card-title text-center px-2"  style="text-align: center;">Mortgage Calculator</h5>
              </div>
              </div>
        </div>

    </div>
    <br><br><br><br>
<?php
  include 'footer.php';
?>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>