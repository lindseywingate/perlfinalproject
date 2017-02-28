<?php
#This page lists all the books by title with their ISBN #'s and price
#The admin can click the book and see all the customers that have bought it

$user = "lindseywingate";
$pass = "password";
$database = "lindseywingate";
$host = "mysqldev.aero.und.edu";

$conn = mysql_connect ($host, $user, $pass); //Connect to database
mysql_select_db($database, $conn);

$query = 'select * from books order by title asc';
$result = mysql_query($query);

while($row=mysql_fetch_assoc($result)) {
	foreach($row as $key=>$value) {
		echo $key .": ". $value . "<br>";
	}
	echo "<br>";
}


?>
