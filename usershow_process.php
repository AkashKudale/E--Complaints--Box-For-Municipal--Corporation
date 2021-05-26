<?php
include "connection.php";
$query="SELECT * FROM box WHERE index_no='$id'";
echo $query; 
$run=mysqli_query($conn,$query);
 ?>
<html>
<head><title>VIEW</title>
</head>
<body>
<center>
<table border="1">
<h2>
<th>Name</th>
<th>Adress</th>
<th>Mobile_no</th>
<th>Area</th>
<th>complaint</th>
<th>Status</th>
</h2>
<?php
while($result=mysqli_fetch_assoc($run))
{
?>
<tr>
<h2>
<td><?php echo $result['name'];?></td>
<td><?php echo $result['address'];?></td>
<td><?php echo $result['mobileno'];?></td>
<td><?php echo $result['area'];?></td>
<td><?php echo $result['complaint'];?></td>
<td><?php echo $result['status'];?></td>
</h2>
</tr>
<?php
}
?>
</table>
</center>
<br><br><br><br>
	<center>
	<form action="front.php" method="get" />
       <input type="submit" name="submit" value="LOGOUT" /><br><br>
	</center>
</body>
</html>                                                                                                                 