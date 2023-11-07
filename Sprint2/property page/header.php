<!DOCTYPE html>
<html>
        <head> 
            <meta charset="UTF-8"> 
            <meta http-equiv="'X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
            <!--Files-->
            <link rel="stylesheet" href="css/bootstrap.min.css"> 
            <link rel="stylesheet" href="css/main.min.css">
            <link rel="stylesheet" href="css/style.css">

            <title>The Magic Realtors</title>

            <script>
                let selectedPropertyAddress;
                let propertyVisit;

                function savePropertyAddress(address) {
                    selectedPropertyAddress = address;
                    window.location.href = 'property.php?address=' + encodeURIComponent(address); //saves address and redorects to property.php
                }

                function saveVisitAddress(address){
                  propertyVisit = address;
                  window.location.href = 'book_visit.php?address=' + encodeURIComponent(address);
                }
            </script>
        </head>

        <body>
<header>
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
                          <li class="nav-item"><a class="nav-link" href="brokers.php">Connect with a Broker</a>
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