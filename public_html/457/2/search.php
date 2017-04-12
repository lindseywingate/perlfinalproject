<html><body>
<?php 
$title = $_GET['title']; 
$host = "mysqldev.aero.und.edu";
$conn = mysql_connect( $host, "lindseywingate", "password" );

if(!$conn)
	die('Could not connect to MySQL: ' . mysql_error());
else {
	mysql_select_db( "lindseywingate", $conn );

	$boolean = false; //used as condition to show whether keywords found or not
	//List a book if its title includes any of the caseinsensitive keywords
	$keywords = explode(" ", $title);
	foreach($keywords as $word) {
		$query = "select * from books where title like '%$keyword%'";
		$result = mysql_query( $query );
        $num = mysql_numrows( $result );
        $i = 0;
		while($i < $num) {
			$boolean = true;
				$title = mysql_result( $result, $i, "title" );
		}
			
	}			


