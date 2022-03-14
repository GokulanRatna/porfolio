<?php
session_start();
include("php/config.php");
include("loginsys/functions.php");

//$user_data = check_login($conn);


?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
      <meta charset="utf-8">
    <title>Cinema4u</title>
    <!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">-->
      <link rel="stylesheet" href="styles/main.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta name="description" content="Cinema homepage" />
      <meta name="keywords" content="Homepage,about us,Cinemas" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]> <script src="scripts/html5shiv.js"> </script> <![endif] -->
<!--
  Author:        Gokulan Vigneswaran 20136713
  Organisation:  Birmingham City University
  Copyright:     Copyright 2020
-->
</head>
<body  style="text-align: center;">
<div id="wrapper"> 

 
    
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="scripts/Whats_on.php">Whats On?</a>
  <a href="scripts/booking.php">Booking</a>
  <a href="./loginsys/Login.php">Login</a>
</div>  
 <div style="text-align: center;">   
<header class="welcome"><a href="index.php"><img src="images/Cinemalogo2.png" alt="Cinema Logo"></a></header>
    </div>
    
    
<!--<h1>If you are already a member of Cinema4u login <a href="scripts/logins.php">here</a></h1>

<div class="collapsible-menu">
<input type="checkbox" id="menu">
<label for="menu">Menu</label>     
<nav class="nav1">
  <ul>
    <li><a href="scripts/Whats_on.php">Whats On?</a></li>
    <li><a href="scripts/booking.php">Booking</a></li>
  </ul>
</nav>   
</div>-->
<section>
<article style="width: 95%">
    <h1 class=Headings>Welcome to Cinema 4u!</h1>
        <p>
    
    </p>

            <p>See the latest films and live events in 2D, 3D, IMAX and IMAX 3D at Cinema4u. Browse movies at a cinema near you and book your tickets online today.
</p>
    
</article> <!--end of article -->
</section> <!--end of section -->
<footer> 
The footer: Copyright &copy; Gokulan.V, Birmingham City University 2020
</footer>
</div> <!--end of wrapper-->

</body>
</html>
