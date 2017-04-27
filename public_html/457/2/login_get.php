<?php
	$username = $_GET['username'];
	$password = $_GET['password'];
	$database = 'lindseywingate';
	$host = "mysqldev.aero.und.edu";
	$conn = mysql_connect ($host, "lindseywingate", "password");
 
	if (!$conn )
		die('Could not connect to MySQL: ' . mysql_error());
	else {
		mysql_select_db($database, $conn);
		
		$result = mysql_query("SELECT * FROM users WHERE username='$username' and password='$password'");
		$num = mysql_numrows($result);

//		echo "THIS IS THE NUMBER OF ROWS . $num";
		if ($num) {
//			echo 'there were results';
			$row = mysql_fetch_array($result);
			if ($row['type_user']=="C") {
//				echo 'true';	
				$returnme = true;
				return $returnme;
			}
			else {
//				echo 'not true';
				$returnme = false;
				return $returnme;
			}
		}
//		else {
//			echo 'there were no results';
//		}
		mysql_close($conn);
	}

