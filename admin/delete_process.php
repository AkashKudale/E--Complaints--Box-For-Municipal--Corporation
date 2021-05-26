<?php
include "../connection.php";
$id=$_GET['id'];
$query="delete from box  WHERE index_no='$id'";
$run=mysqli_query($conn,$query);
if($run)
{
  header("location:show_process.php");
}
else
{
echo "failed to delete";
}
?>



