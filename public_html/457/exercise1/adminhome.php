<?php
session_start();
if(!isset($_SESSION['user_id']) || time() - $_SESSION['login_time'] > 1800) {
	echo " Your session has expired. Please login again.";
}
else {
#this is the home page for admin users
echo "ADMIN HOMEPAGE
<br><br>
<form>
<input type='button' name='xmlupload' value='Click to Upload XML' onclick=\"window.location.href='http://people.aero.und.edu/~lwingate/457/exercise1/upload.php' \" />
</form>

<form action='listbooks.php' method='post'>
<input type='submit' name='books' value='Click to View Books'>
</form>

<form action='listcustomers.php' method='post'>
<input type='submit' name='customers' value='Click to View Customers'>
</form>
";
}
?>
