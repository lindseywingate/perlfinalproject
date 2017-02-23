<?php
#This page is used to check the login credentials
if ($_POST["thisone"] == "login") {
	$username = "lindseywingate";
	$password = "password";
	$database = "lindseywingate";
	$host = "mysqldev.aero.und.edu";

	$conn = mysql_connect ($host, $username, $password);
	mysql_select_db($database, $conn);
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from users where username = '$username' && password ='$password'";	

	$result = mysql_query($query);
	$num = mysql_numrows($result);

	if($num) {
		session_start();
		$_SESSION['timeout'] = time();
		$_SESSION['cookie'] = 'whitechocolate';
	}
	else {
		echo "Your login information was incorrect. Please try again.";
	}
}
?>
