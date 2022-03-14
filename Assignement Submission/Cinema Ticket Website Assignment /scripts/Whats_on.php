<?php
    session_start();
    include ("../php/config.php");
    //include("functions.php");
    
    //$user_data = check_login($conn);
?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
      <meta charset="utf-8">
    <title>What's On!</title>
      <link rel="stylesheet" href="../styles/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta name="description" content="Hire out our venues" />
      <meta name="keywords" content="Movies,Watch,Genres,Theatre" />
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
  <a class="active" href="../index.php">Home</a>
  <a href="Whats_on.php">Whats On?</a>
  <a href="booking.php">Booking</a>
  <a href="../loginsys/Login.php">Login</a>
</div>    


<div style="text-align: center;">   
<header class="welcome"><a href="../index.php"><img src="../images/Cinemalogo2.png" alt="Cinema Logo"></a></header>
    </div>
    
<!--<div class="collapsible-menu">
<input type="checkbox" id="menu">
<label for="menu">Menu</label> 

<nav class="nav1">
  <ul>

      <li><a href="../scripts/booking.php">Booking</a></li>
      <li><a href="../index.php">Homepage</a></li>

  </ul>
</nav>   
</div>-->
<section  class ="centered">    
<article style="width: 95%">
    <h1>*Check whats showing currently at our thearters and book your tickets*</h1>
   <br><br>
    
    
    <h2 class=Headings>DUNE</h2>  
    <div><h3>Info</h3>
                <ul>
                <li>Genre: Science fiction</li>
                <li>Age Rating: 12A </li>
                <li>RunTime: 2h 35m  </li>
                <li></li>
            </ul>
    <h3>Show Times</h3>
                <ul>
                <li>11:30 am</li>
                <li>13:45 pm</li>
            </ul>
    </div>
        <div><div>
            <div class = "side"><img src="../images/Dune.jpeg" alt="Movie 1 Picture"></div>
            </div><br><br>
    </div>
            <p class=Dtext>    
        <small>
            Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet's exclusive supply of the most precious resource in existence, only those who can conquer their own fear will survive.
</small>
    </p><br><br>
                
    </article>
    <article style="width: 95%">
    <h2 class=Headings>Spiderman No Way Home</h2>
        <div>
        <h3>Info</h3>
                <ul>
                <li>Genre: Action/Adventure </li>
                <li>Age Rating: 12A</li>
                <li>RunTime: 2h 28m </li>
                <li></li>
            </ul>
                <h3>Show Times</h3>
                <ul>
               <li>17:30 pm</li>
                <li>23:45 pm</li>
            </ul>
        </div>
        
            <div><div><img src="../images/nowayhome.jpeg" alt="Movie 2 Picture"></div>
            </div><br><br>
        
        <p class=Dandeliontext>    
            <small>
                With Spider-Man's identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.            </small>
        </p>
                
    </article> <!--end of article -->
</section> <!--end of section -->
<footer> The footer: Copyright &copy; Gokulan.V, Birmingham City University 2020</footer>
</div> <!--end of wrapper-->
</body>
</html>
