<?php
include 'database.php';

if(isset($_POST['submit']))
{   
    $id = uniqid();
    $product = $_POST['Products'];
    $name = $_POST['Name'];
    $number = $_POST['Number'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    $sql = "insert into buy(id,product,name,email,phone,address) values('$id','$product','$name','$email','$number','$address')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Thank You for Connecting With US!')</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>