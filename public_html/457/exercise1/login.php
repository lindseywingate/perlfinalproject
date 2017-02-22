<?php
#This page is used to login to the bookstore
echo "
<html>
<head>
	<h3>Login to the Bookstore</h3>
</head>
<body>
	<form action='checklogin.php' method='post'>
	Username: <input type='text' name='username'><br><br>
	Password: <input type='text' name='password'><br><br>
	<input type='submit' value='login'>
	<input type='reset' value='Clear'>
	<input type='reset' value='Show Source'>
</body>
</html>

";
?>
