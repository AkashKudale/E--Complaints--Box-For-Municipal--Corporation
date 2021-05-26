<?php
 include "connection.php";
echo  $id=$_GET['id'];
echo  $name=$_GET['name'];
echo  $mobileno=$_GET['mobileno'];
echo  $address=$_GET['address'];
echo  $area=$_GET['area'];
echo  $complaint=$_GET['complaint'];
echo  $status=$_GET['status'];

$query="UPDATE box SET status='solved' WHERE index_no='$id'";





$run=mysqli_query($conn,$query);
if($run)
{
  header("location:admin/show_process.php");
}
else
{
echo "failed to update";
}
?>



