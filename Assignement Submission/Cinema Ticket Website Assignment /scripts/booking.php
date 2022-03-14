<?php
    session_start();
    include ("Buytickets.php")
    //include("functions.php");
    
    //$user_data = check_login($conn);
?>



<!DOCTYPE html>
<html lang="en-GB">
<head>
      <meta charset="utf-8">
    <title>Booking</title>
    <!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">-->
      <link rel="stylesheet" href="../styles/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
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
  <a class="active" href="../index.php">Home</a>
  <a href="Whats_on.php">Whats On?</a>
  <a href="booking.php">Booking</a>
  <a href="../loginsys/Login.php">Login</a>
</div>  
    

<div>   
<header class="welcome"><a href="../index.php"><img src="../images/Cinemalogo2.png" alt="Cinema Logo"></a></header>
    </div>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
            
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div>
				<form method="post" action="booking.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; "align="center" >
						<img src="../images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div><br><br>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Booking Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>£ <?php echo $values["item_price"]; ?></td>
						<td>£ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="booking.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">£ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>						
				</table>
                     <form method="POST" action="Checkout.php">
                         <input type="submit" value="checkout"><br><br>
                         </form>

                            
			</div>
		</div>
	<br/>
<footer> 
<!--The footer:--> Copyright &copy; Gokulan.V, Birmingham City University 2020
</footer>
</div> <!--end of wrapper-->

</body>
</html>
