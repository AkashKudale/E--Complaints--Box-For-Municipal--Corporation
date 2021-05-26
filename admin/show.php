<?php
session_start();
?>
<?php
if(isset($_SESSION['adminid']))
{

}
else
{
header("location:../front.php");
}
?>
<html>
<body>
<form action="show_process.php" method="get" />

<center>
<br> <br> 
<br> <br>
<br> <br>
<br> <br>
<input type="submit" name="submit" value="view" />
</center>
</body>
</html>
