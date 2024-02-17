<?php
include 'database.php';

if(isset($_POST['submit']))
{   
    $id = uniqid();
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    $sql = "insert into contact(id,name,email,subject,message) values('$id','$name','$email','$subject','$message')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('We will Contact You AS SOON AS POSSIBLE')</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>