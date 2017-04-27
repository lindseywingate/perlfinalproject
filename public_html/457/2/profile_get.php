<?php
	$username = $_GET['username'];
	$password = $_GET['password'];
	$database='lindseywingate';
	$host = "mysqldev.aero.und.edu";
	$conn = mysql_connect ($host, "lindseywingate", "password");

	if(!$conn) {
		die("Could not connect to MYSQL: " . mysql_error());
	}
	else {
		mysql_select_db($database, $conn);
		$result = mysql_query("SELECT * FROM users WHERE username='$username' and password='$password'");
		$num = mysql_numrows($result);
		if($num) {
			$row = mysql_fetch_array($result);
			$array = implode(",", $row);
			return $array;	
		}
	}
?>
