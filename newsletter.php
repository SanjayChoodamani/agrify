<?php
include 'database.php';

if(isset($_POST['submit']))
{   
    $id = uniqid();
    $mail = $_POST['Mail'];
    $sql = "insert into newsletter(id,email) values('$id','$mail')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Thank Yor For Subscribing for our NEWSLETTER')</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>