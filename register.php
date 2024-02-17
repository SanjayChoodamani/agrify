<?php
include 'database.php';

if(isset($_POST['submit']))
{   
    $id = uniqid();
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $username = $_POST['Username'];
    $number = $_POST['Number'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $sql = "insert into register(id,fname,lname,username,phone,email,password) values('$id','$fname','$lname','$username','$number','$email','$password')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Registered Sucessfully!!')</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>