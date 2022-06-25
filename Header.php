<?php include_once("Connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
  <body>
    <header>
        <div class="header">

            <nav class="navbar ">
                <div class="container relative">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="images\logo.png" alt=""></a>
                    </div>
    
                    <div class="collapse navbar-collapse relative" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="AboutUs.php">About Us</a></li>
                            <li><a href="Products.php">Shop</a></li>
                            <li><a href="ContactUS.php">Contact Us</a></li>
                        </ul>
    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login.php"><img src="images\user.png"> </a></li>
                            <li><a href="AddtoCart.php"><img src="images\cart.png"> </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
             
        </div>
        
    </header>