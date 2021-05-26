<?php
include "connection.php";
$user=$_GET['user'];
$password=$_GET['password'];

$query="SELECT * FROM 'login' WHERE user_name='$user' and password='$password'";
$run=mysql_query($conn,$query);
$result=mysqli_fetch_assoc($run);
$num=mysqli_num_rows($run);
if($num>0)
{
echo "<h2>login</h2>";

}
else
{
echo "<h2>failed to login</h2>";
}
?>
