<html><body>
<?php
 
if ( $_POST['act'] == "List the titles" ) {
  /************************************************************

  This program shows how to list the book titles from the
    books table.
  To use this program, you need to create a table
    books by using the following command:
  mysql> create table books (
      ->   title   char(128),
      ->   ISBN    char(20) primary key,
      ->   price   real );
  Query OK, 0 rows affected (0.07 sec)
 
  *************************************************************/
  $username = "your-id";
  $password = "your-pw";
  $database = "your-db";
  $host     = "mysqldev.aero.und.edu";
 
  // Connect to the database.
  $conn = mysql_connect( $host, $username, $password );
 
  // Select a database.
  mysql_select_db( $database, $conn );
 
  // Compose the query.
  $query  = "select title from books where ";
  $query  = $query . "title like '%$_POST[title]%'";
 
  // Execute the query.
  $result = mysql_query( $query );
 
  // Find the row number of the results.
  $num    = mysql_numrows( $result );
 
  // Print the results row by row.
  $i = 0;
  while ( $i < $num ) {
    $title = mysql_result( $result, $i, "title" );
    echo  "$title";
    $i++;
  }
  // Close the database.
  mysql_close( );
}
elseif ( $_POST["act"] == "Help" ) {
  echo  "No help at this moment.";
}
else {
  echo  "No such option: $_POST['act']";
}
?>

</body></html>

