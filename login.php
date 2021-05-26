<?php
session_start();
?>
<html>
<head> 
<title>login</title>
</head>
<body>
<body background="user.jpg">
<form action="login_proccess.php" method="GET">
<center>

  <br><br><br><br><br><br>
<img src="logo.jpg" height="100" width="100">
<label><h1>  &nbsp &nbspUSER LOGIN</h1></label>

       <label><b>Username</b></label>
       <input type="text" name="user" required/><br><br>

       <label><b>Password</b></label>
       <input type="password" name="password" required/><br><br>
</center>
<center>
&nbsp &nbsp <input type="submit" name="submit" value="LOGIN" />
<br><br>
</form>
<a href=signin.php>Create Account</a><br><br>
<a href=front.php>Admin login</a>
</center>
</body>
</html>