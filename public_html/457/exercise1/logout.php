<?php
session_start();
if(!isset($_SESSION['user_id']) || time() - $_SESSION['login_time'] > 1800) {
    echo " Your session has expired. Please login again.";
}
else { //end session
	session_destroy();
	header('Location: http://people.aero.und.edu/~lwingate/457/exercise1/login.php');	
}


?>
