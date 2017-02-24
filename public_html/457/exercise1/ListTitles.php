<html><body>
<?php 
if ( $_POST['act'] == "List the titles" ) {
	$username = "lindseywingate";
	$password = "password";
	$database = "lindseywingate";
	$host		 = "mysqldev.aero.und.edu";
 
	// Connect to the database.
	$conn = mysql_connect( $host, $username, $password );
 
	// Select a database.
	mysql_select_db( $database, $conn );

	$title = $_POST['title']; 
	// Compose the query.
	$query = "select * from books where title like '$title'";
 
	// Execute the query.
	$result = mysql_query( $query );
 
	// Find the row number of the results.
	$num = mysql_numrows( $result );
 
	// Print the results row by row.
	$i = 0;
	while ( $i < $num ) {
		$title = mysql_result( $result, $i, "title" );
		$ISBN = mysql_result( $result, $i, "ISBN" );
		$cost = mysql_result ( $result, $i, "price" );
		echo	"$title, $ISBN, $cost";
		$i++;
	}
	// Close the database.
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

