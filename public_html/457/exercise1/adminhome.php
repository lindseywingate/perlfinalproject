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
<input type='submit' name='xmlupload' value='Click to view books'>
</form>
";

#list data of all books sorted by title ascendingly, all data

#list ids and names of all customers having purchased the book by clicking books hyperlinked title

#list data of all customers sorted by name ascendingly (id, hyperlinked name, total amount)

#list isbns, titles, and quantities of books purchased by the customer by clicking his/her hyperlinked name
}

?>
