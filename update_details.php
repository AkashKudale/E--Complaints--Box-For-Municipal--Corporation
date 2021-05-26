<?php
include "connection.php";
echo $id=$_GET['id'];
 $query="select * from box where index_no='$id'";
 $run=mysqli_query($conn,$query);
  $result=mysqli_fetch_assoc($run); 
//print_r($result);
?>

<html>
<head><title>login</title>
</head>
<body>
<form action="update_process.php" method="GET">
<input type="hidden" name="id" value="<?php echo $id; ?>"/><br><br>
<center> <h2> UPDATE DETAILS </h2>
</center>
<center>
<label>Name</label>
<input type="text" name="name" value="<?php echo $result['name'];?>" /><br><br>
<label>Address</label>
<input type="text" name="address"value="<?php echo $result['address'];?>" /><br><br>
<label>Mobileno</label>
<input type="text" name="mobileno"value="<?php echo $result['mobileno'];?>" /><br><br>

<label>Complaint Area</label>
<input type="text" name="area" value="<?php echo $result['area'];?>"/><br><br
<label>Enter Your Complaint</label>
<input type="text" name="complaint" value="<?php echo $result['complaint'];?>"/><br><br>
<label>Status</label>
<input type="text" name="status" value="<?php echo $result['status'];?>"/><br><br>
</center>
<center>
<input type="submit" name="submit" value="UPDATE">
</center>
</body>
</html>





