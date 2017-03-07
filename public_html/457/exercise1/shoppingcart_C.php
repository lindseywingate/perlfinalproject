<?php
session_start();
if(!isset($_SESSION['user_id']) || time() - $_SESSION['login_time'] > 1800) {
	echo "Your session has expired. Please login again.";
	header("Location: people.aero.und.edu/~lwingate/457/exercise1/login.php");
}
else {
	$username =$_SESSION['user_id'];
//search database books for user
//if duplicate books, no action
//list all books from database and selected
//have option to change number of books in input
//show up to date amount

	echo "<h3> Shopping Cart  </h3>";
	$username = "lindseywingate";
    $password = "password";
    $database = "lindseywingate";
    $host     = "mysqldev.aero.und.edu";
    $conn = mysql_connect( $host, $username, $password );
    mysql_select_db( $database, $conn );

	$bookstoadd = $_POST['books'];

	echo "<form action='addtocart_C.php' method='post'>";
	foreach($bookstoadd as $book) {
		$query = "select title from shoppingcart where ISBN = '$book'";
		$result = mysql_query($query) or die();
		$num = mysql_numrows($result);
		if($num>0) {
			echo $result."<br>";
		}
		else {
			echo $book."<br>";
		}
	}
}
?>
