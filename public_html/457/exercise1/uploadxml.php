<?php
if($_POST['act']=="Upload" ) {
      if ( ( $_FILES["file"]["type"] == "text/xml" ) &&
           ( $_FILES["file"]["size"] < 50000 ) ) {
        if ( $_FILES["file"]["error"] <= 0 ) {
          move_uploaded_file( $_FILES["file"]["tmp_name"], "upload/books.xml" );
          echo "Stored in: <em>upload/books.xml</em>";
          chmod( "upload/books.xml", 0755 );
        }
	}
}
?>
