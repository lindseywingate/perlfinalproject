<?php
  $username = $_GET['username'];
  $password = $_GET['password'];
  $host     = "mysqldev.aero.und.edu";
  $conn     = mysql_connect( $host, "lindseywingate", "password" );
 
  if ( !$conn )
    die( 'Could not connect to MySQL: ' . mysql_error( ) );
  else {
    mysql_select_db( "database", $conn );
    $sql  = "SELECT type_user FROM users WHERE ";
    $sql .= "name='$username' and password='$password'";
    if ( $result = mysql_query( $sql, $conn ) ) {
      $row  = mysql_fetch_array( $result );
      $data = $row[0];
    }
    if ( $data )  echo $data;
    mysql_close( $conn );
  }

