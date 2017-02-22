<?php
#This page is used to check the login credentials
if ($_POST['submit'] == 'login') {
	$username = "lindseywingate";
	$password = "password";
	$database = "lindseywingate";
	$host = "mysqldev.aero.und.edu";

	$conn = mysql_connect ($host, $username, $password);
	mysql_select_db($database, $conn);
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from users where username = $username && password = $password";	

	$result = mysql_query($query);
	$num = mysql_numrows($result);

	echo "Number of results: $num";
}
	if($num>1) {
		unset($_SESSION['customer']);
		session_start();
		$_SESSION['customer'] = $_POST['name'];
	}
?>
