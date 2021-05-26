<?php
session_start();
?>
<?php
include "connection.php";
$user=$_GET['user'];
$password=$_GET['password'];

$query="SELECT * FROM `login` WHERE user_name='$user'
 and password='$password'";
$run=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($run);
$num=mysqli_num_rows($run);
if($num>0)
{
$_SESSION['id']=$result['index_no'];
header("location:usershow.php");

}
else
{
header("location:login.php");
}
?>