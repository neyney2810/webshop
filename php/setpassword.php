<?php

session_start();

if ($_SESSION['active'] != 1) {

  //Sofort logout
  header("Location: ../login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password wiederherstellen</title>
    <link rel="shortcut icon" type="image/png" href="../image/png-clipart-clock-clock-cartoon-thumbnail.ico"/>

    <!--Jquery-->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <!--Bootstrap-->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!--Font awesome-->
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">

    <!--Extra-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/startsite.css">
    <style>
        span {
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <header>
        <div class="row" id="navbar">
            <div class="col-lg-2 col-md-3 col-sm-12 justify-content-center" onclick="window.location.href = 'startsite.html'" style="cursor: pointer;">
                <h2>Armbanduhr.de</h2>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-12">
                <div class="d-flex justify-content-center">
                    <div class="searchbar">
                      <input class="search_input" type="text" name="" placeholder="Suche nach Uhren, Marken und mehr...">
                      <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12" style="align-self: flex-end;">
                <div class="row" id="help"><a href="help.html">Need help?</a></div>
                <div class="row" id="log">
                    <p> <button class="btn" onclick="window.location.href='login.html'"><b>Anmelden</b></button>
                        <button class="btn" onclick="window.location.href='signup.html'"><b>Registrieren</b></button> </p>
                </div>
            </div>
        </div>
    </header>
    <div class="container h-100" style="background-color: transparent;">
        <div class="d-flex justify-content-center" >
            <div class="card mt-5 col-md-4 animated myForm">
                <div class="card-header">
                    <h4>Password zurücksetzen:</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div id="dynamic_container">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-50"> <i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" placeholder="Neues Password" class="form-control"/>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-50"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" placeholder="Neues Password wiedergeben" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-reset d-grid" type="button" style="margin-top: 20px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Unsere AGB</a></li>
            <li class="list-inline-item"><a href="#">Hinweis zur Cookies</a></li>
            <li class="list-inline-item"><a href="#">Copyright</a></li>
          </ul>
        <div class="row justify-content-center">
            Mustergesellschaft GmbH MusterStraße 4, 123456 Musterstadt
        </div>
    </footer>
</body>
</html>