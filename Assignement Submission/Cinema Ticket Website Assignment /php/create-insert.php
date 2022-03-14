<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Create insert</title>
</head>

<body>
    <?php
    session_start();
    include ("config.php");
    include("../loginsys/functions.php");
    
    
    
    
    if (isset($_SESSION['username'])) {
        header("Location: ../loginsys/Login.php");
}



    // gets the value from the input box and stores it in a variable
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Username = $_POST['username'];
    $Password= $_POST['passwd'];
    $ConfPassword= $_POST['confirm_password'];
    $DateofBirth = $_POST['DOB'];
    $Email = $_POST['email'];
    $PhoneNumber = $_POST['Phone'];
    $Local = $_POST['Local_Cinema'];

    // $sql statement now passes the value of the variable
  //  $sql = "INSERT INTO db1 (First_Name, Last_Name) VALUES ('$fname','$lname')";
    
    
    if(!empty($Username) && !empty($Password) && ($Password) == ($ConfPassword))
    {
     
    
    $user_id = random_num(20);
    $sql = "insert into Customer_Data(user_id,Username, Password, First_Name, Last_Name, Date_of_Birth, Email, Phone_Number, LocalCinema) VALUES ('$user_id','$Username','$Password','$fname', '$lname', '$DateofBirth','$Email', '$PhoneNumber', '$Local')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New User created successfully";
        header("location: ../loginsys/Login.php");
        die;
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
        }else
    {
        echo "<script>alert('Password Not Matched.')</script>";
    }




    $conn->close();
    ?>

</body>

</html>