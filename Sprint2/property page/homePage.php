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
  <header class="aboutSection">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="Mynavbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-weight: bold; font-size: 35px;">TMR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="properties.php">Properties</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="brokersMain.html">Connect with a Broker</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#MyAccount" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                My Account</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.php" style="text-align: center;">Log In</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="create_account.php" style="text-align: center;">Sign Up</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#" style="text-align: center;">My Favorites</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="updateAccount.php" style="text-align: center;"> Update My Account</a></li>
                </ul>
              </li>
            </ul>
    
            <form method="post" action="search.php" class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search by City" aria-label="Search" type="text" name="city" id="city">
              <button class="btn btn-outline-light" type="submit" value = "Search" style="background-color:#000080; ">Search</button>
            </form>
          </div>
        </div>
      </nav>
  </header>
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

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
