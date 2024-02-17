<?php
include 'database.php';

if(isset($_POST['submit']))
{   
    $id = uniqid();
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $number = $_POST['Number'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    $product = $_POST['productName'];
    $quantity = $_POST['Quantity'];
    $variety = $_POST['Variety'];
    $sql = "insert into sell(id,fname,lname,phone,email,address,product_name,quantity,variety) values('$id','$fname','$lname','$number','$email','$address','$product','$quantity','$variety')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Thank You for Connecting With US!')</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>