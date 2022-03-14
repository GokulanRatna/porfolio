<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
    <title>Register</title>
    <!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">-->
      <link rel="stylesheet" href="../styles/main.css" />
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

<div class="topnav">
  <a class="active" href="../index.php">Home</a>
  <a href="../scripts/Whats_on.php">Whats On?</a>
  <a href="../scripts/booking.php">Booking</a>
  <a href="../loginsys/Login.php">Login</a>
</div>    


<header class="welcome"><a href="../index.php"><img src="../images/Cinemalogo2.png" alt="Cinemalogo"></a></header>

    <h1>Registration</h1>

    <form action="create-insert.php" "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <input type="text" name="fname" placeholder="enter your first name" required /><br><br>

        <input type="text" name="lname" placeholder="enter your last name" required /><br><br>
        
        <input type="text" name="username" value="" placeholder="enter a username" required /><br><br>

        <input type="password" name="passwd" value="" placeholder="enter a password" required /><br><br>
        
        <input type="password" name="confirm_password" value="" placeholder="confirm your password" required /><br><br>
        
        <input type="text" name="email" value="" placeholder="provide an email" required /><br><br>
        
        <input type="Date of Birth" name="DOB" value="" placeholder="Enter your Darte of Birth (YYYY-MM-DD)" required /><br><br>

        <input type="PhoneNumber" name="Phone" value="" placeholder="Enter your Phone Number" required /><br><br>
        
        
        <input type="Local Cinema" name="Local_Cinema" value="" placeholder="Enter your Local Cinema" required /><br><br>
        
        
        
    <p class="center"><br />
        Already have an account?<a href="../loginsys/Login.php">Login here</a>
	</p>
        
        
         <input type="submit" onClick="myFunction()"/><br><br>
    
     
        <!--<a href="../index.php"><input type="submit"/></a>-->

    </form>

</body>

</html>