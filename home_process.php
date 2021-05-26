<?php 
include "connection.php";
$name=$_GET['name'];
$address=$_GET['address'];
$mobileno=$_GET['mobileno'];
$area=$_GET['area'];
$complaint=$_GET['complaint'];
$status=$_GET['status'];
$query="INSERT INTO box( `name`, `address`, `mobileno`, `area`, `complaint`, `status`) 
VALUES ('$name','$address','$mobileno','$area','$complaint','$status')";
$run=mysqli_query($conn,$query);
if($run)
{
header("location:front.php");
}
else
{
    echo "<h2>failed</h2>";
}
?>
