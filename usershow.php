<?php
session_start();
?>
<?php
if(isset($_SESSION['id']))
{

}
else
{
header("location:../front.php");
}
?>

<html>
<body>
<br> <br> 
<br> <br>
<br> <br>
<br> <br>
<center>
<a href="home.php"><h2>Register complaint</h2></a>
<a href="usershow_process.php"><h2>View Your Complaint Status</h2></a>
</center>
</body>
</html>