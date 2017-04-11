<?php
#This page is used to login to the bookstore
echo "
<html>
<head>
	<h3>Login to the Bookstore</h3>
</head>
<body>
	<form action='checklogin.php' method='post'>
	Username: <input type='text' name='username' value='username'><br><br>
	Password: <input type='text' name='password' value='password'><br><br>
	<input type='submit' name='thisone' value='Login' >
	<input type='reset' name='thatone' value='Clear'>
	<input style='background-color:red; border:red; color: white' type='submit' name='clearall' value='Clear Database'> 
	</form>
</body>
</html>

";
?>
