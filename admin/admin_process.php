<?php 
session_start();
?>

<?php
include "../connection.php";
$user=$_GET['user'];
$password=$_GET['password'];
$query="SELECT * FROM `adlogin` WHERE user_name='$user'
 and password='$password'";
$run=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($run);
$num=mysqli_num_rows($run);
if($num>0)
{

$_SESSION['adminid']=$result['index_no'];
echo "<h2>Login Successfull</h2>";
header("location:show.php");

}
else
{
header("location:admin.php");

}
?>