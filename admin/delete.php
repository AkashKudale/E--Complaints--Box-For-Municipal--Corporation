<?php
include "../connection.php";
echo $id=$_GET['id'];
 $query="delete * from box where index_no='$id'";
 $run=mysqli_query($conn,$query);
  //$result=mysqli_fetch_assoc($run); 
//print_r($result);
?>

<html>
<head><title>login</title>
</head>
<body>
<form action="delete_process.php" method="GET">
<input type="hidden" name="id" value="<?php echo $id; ?>"/><br><br>
<center> <h2> Delete DETAILS </h2>
</center>
<center>
<input type="submit" name="submit" value="Delete">
</center>
</body>
</html>





