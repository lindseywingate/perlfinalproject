<?php
if ( $_POST['act'] == "Upload" ) {
	header( "Content-type: text/html" );
	if ( ( $_FILES[file][type] == "text/xml" ) &&
		 ( $_FILES[file][size] < 50000 ) ) {
	if ( $_FILES[file][error] <= 0 ) {
		echo "Upload: <em>" . $_FILES[file][name] . "</em><br />";
		echo "Type: <em>" . $_FILES[file][type] . "</em><br />";
		echo "Size: <em>" . ceil( $_FILES[file][size] / 1024 ) . " Kb</em><br />";
		move_uploaded_file( $_FILES[file][tmp_name], "upload/books.xml" );
		echo "Stored in: <em>http://wenchen.cs.und.edu/course/457/exercise/1/upload/books.xml</em>";
		chmod( "upload/books.xml", 0755 );
	}
else {
		echo "Error: " . $_FILES[file][error];
		print_r( $_FILES[file] );
	}
	}
	else {
	echo "Invalid file";
	print_r( $_FILES[file] );
	}
}
elseif ( $_POST['act'] == "Check the upload" ) {
	header( "Location: http://wenchen.cs.und.edu/course/457/exercise/1/upload/books.xml" );
}
elseif ( $_POST['act'] == "Help" ) {
	header( "Content-type: text/html" );
	system( "cat help.html" );
}
?>
