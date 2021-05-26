<?php
include "connection.php";
$user=$_GET['user'];
$password=$_GET['password'];
$address=$_GET['address'];
$mobile=$_GET['mobile'];
$name=$_GET['name'];
$query="INSERT INTO `login`(name,user_name,password,address,mobileno)
VALUES ('$name','$user','$password','$address','$mobile')";
$run=mysqli_query($conn,$query);
if($run)
{
   header("location:login.php");
}
else
{
    echo "<h2>failed to sign up</h2>";
     header("location:signup.php");
}
?>

