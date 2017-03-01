<html><body>
<?php 
if ( $_POST['act'] == "List the titles" ) {
	$username = "lindseywingate";
	$password = "password";
	$database = "lindseywingate";
	$host		 = "mysqldev.aero.und.edu";
 
	$conn = mysql_connect( $host, $username, $password );
	mysql_select_db( $database, $conn );

	$title = $_POST['title']; 

	#start by querying title entered:
	$boolean = false;
	$query = "select * from books where title like '%$title%'";
	$result = mysql_query($query);
	$num = mysql_numrows($result);
	if($num<1) {
		$keywords = explode(" ", $title);
		foreach($keywords as $word) {
			$query = "select * from books where title like '%$word%'";
			$result = mysql_query( $query );
			$num = mysql_numrows( $result );
			$i = 0;
			echo "<b>Like \"$word\": <br></b>";
			if($num==0) {
				print "No books found for this keyword.<br><hr>";
			}
			while ( $i < $num ) {
				$boolean = true;
				$title = mysql_result( $result, $i, "title" );
				$ISBN = mysql_result( $result, $i, "ISBN" );
				$cost = mysql_result ( $result, $i, "price" );
				echo	"Title: $title<br>ISBN: $ISBN<br>Price: $cost<br><br>";
				$i++;
			}
		}
		if($boolean == false) {
			print "<h4>Other Books Available:</h4>";
			$newquery = "select * from books";
			$finalresults = mysql_query($newquery);
			$y = 0;
			$count = mysql_numrows($finalresults);
			while($y<$count) {
				$title = mysql_result( $finalresults, $y, "title" );
				$ISBN = mysql_result( $finalresults, $y, "ISBN" );
				$cost = mysql_result ( $finalresults, $y, "price" );
				echo "Title: $title<br>ISBN: $ISBN<br>Price: $cost<br><br>";
				$y++;
			}
		}
	}
	else {
		$i = 0;
		while ( $i < $num ) {
			$title = mysql_result( $result, $i, "title" );
			$ISBN = mysql_result( $result, $i, "ISBN" );
			$cost = mysql_result ( $result, $i, "price" );
			echo	"Title: $title<br>ISBN: $ISBN<br>Price: $cost<br><br>";
			$i++;
		}
	}
	mysql_close( );
}
elseif ( $_POST["act"] == "Help" ) {
	echo "No help at this moment.";
}
else {
	echo "No such option.";
}
?>

</body></html>

