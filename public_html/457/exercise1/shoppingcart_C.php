<?php
session_start();

$user = $_SESSION['user_id'];

$username = "lindseywingate";
$password = "password";
$database = "lindseywingate";
$host        = "mysqldev.aero.und.edu";

$conn = mysql_connect( $host, $username, $password );
mysql_select_db( $database, $conn );
echo "<h3>Shopping Cart</h3>";
echo "<form action='updatequantity_C.php' method='post'>";
$query = "select * from shoppingcart where name='$user'";
$result = mysql_query($query) or die();
$num = mysql_numrows($result);
$i = 0;
while($i<$num) {
	$title=mysql_result($result, $i, 'title');
    $price=mysql_result($result, $i, 'price');
    $ISBN=mysql_result($result, $i, 'ISBN');
	$quantity=mysql_result($result,$i, 'quantity');
    $i++;   
	echo "<input type='text' name='post[$ISBN]' value=$quantity size=2>".$title."<br>";
}
echo "<input type='submit'>";
echo "</form>";
?>
