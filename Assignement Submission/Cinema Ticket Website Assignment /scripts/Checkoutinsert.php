<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Checkout insert</title>
</head>

<body>
    <?php
    session_start();
    include ("../php/config.php");
    include("../loginsys/functions.php");
    
    
    



    // gets the value from the input box and stores it in a variable
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $Card_Number = $_POST['Card_Number'];
    $CVV= $_POST['CVV'];
    $Street_Address= $_POST['Street_Address'];
    $postcode = $_POST['postcode'];
    $DOB = $_POST['DOB'];
    $PhoneNumber = $_POST['Phone'];
    $Local = $_POST['Local_Cinema'];

    // $sql statement now passes the value of the variable
  //  $sql = "INSERT INTO db1 (First_Name, Last_Name) VALUES ('$fname','$lname')";
    
    
    $sql = "insert into Card_Data(fullname, email, Card_Number, CVV, Street_Address, postcode, DOB, Phone,Local_Cinema) VALUES ('$fname','$email','$Card_Number','$CVV', '$Street_Address', '$postcode','$DOB', '$PhoneNumber', '$Local')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New order made successfully";
        header("location: index.php");
        die;
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
        




    $conn->close();
    ?>

</body>

</html>