<?php 

session_start();

    include ("../php/config.php");
    include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['Username'];
		$password = $_POST['Password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
                       $query = "SELECT * From Customer_Data WHERE Username='$user_name' AND Password='$password'";

			//$query = "select * from Customer_Data where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
				        echo'<script>alert("Logged in!!")</script>';
                        header("Location:User.php");
						die;
					}
				}
			}
			
			echo "wrong password!";
		}else
		{
			echo "wrong username!";
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css" />
    
    </head>
<body  style="text-align: center;">
         <div class="topnav">
  <a class="active" href="../index.php">Home</a>
  <a href="../scripts/Whats_on.php">Whats On?</a>
  <a href="../scripts/booking.php">Booking</a>
  <a href="login.php">Login</a>
    </div>  
    
    <header class="welcome"><a href="../index.php"><img src="../images/Cinemalogo2.png" alt="Cinemalogo"></a></header>
        
        <div id="box">
        <form action="User.php" method="post" >
            <div>Login</div>
            <input type="text" name="Username"><br><br>
            <input type="password" name="Password"><br><br>
            
            <input type="submit" value="Login"><br><br>
            
            <a href="../php/create-form.php">Signup</a><br><br>
            
            
            
            </form>
        
        
        
        </div>

    
    
    
    
    </body>
</html>