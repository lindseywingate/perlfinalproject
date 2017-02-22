<?php
if($_POST['act']=="Upload" ) {
      if ( ( $_FILES["file"]["type"] == "text/xml" ) &&
           ( $_FILES["file"]["size"] < 50000 ) ) {
        if ( $_FILES["file"]["error"] <= 0 ) {
          move_uploaded_file( $_FILES["file"]["tmp_name"], "upload/books.xml" );
          echo "Stored in: <em>upload/books.xml</em>\n";
          chmod( "upload/books.xml", 0777 );
        }
	}
	$username = "lindseywingate";
    $password = "password";
    $database = "lindseywingate";
    $host = "mysqldev.aero.und.edu";
    $conn = mysql_connect( $host, $username, $password, false, 128 );
	if ($conn) {
		echo "\nSuccessfully connected";
		mysql_select_db('lindseywingate', $conn);
	}
	else {
		die("Could not connect " . mysql_error() );
	}
	
	$get = file_get_contents('upload/books.xml');
	$xml = simplexml_load_string($get);
	$json = json_encode($xml);
	$array = json_decode($json, TRUE);
	print_r($array);
	foreach($array as $a=>$b) {
		echo "$b[0]\n";
		foreach($b[0] as $c=>$d) {
			echo "$c, $d\n";
		}
	}	
}
?>
