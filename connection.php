<?php
$conn= mysqli_connect("localhost","root","");
$db= mysqli_select_db($conn,"project");
if($conn)
{
echo "";
}
else
{
echo "failed to connect";
}
if($db)
{
echo "";
}
else
{
echo "failed to connect database";
}
?>
 
