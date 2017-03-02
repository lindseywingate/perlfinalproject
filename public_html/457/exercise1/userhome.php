<?php 
session_start();
if(!isset($_SESSION['user_id']) || time() - $_SESSION['login_time'] > 1800) {
	echo "Your session has expired. Please login again.";

}	
else {
	#add checkbox next to each book to put in cart and hyperlinked title
	echo  "
	<html>
	<center>
			<form method='post' action='listtitles.php'>
			<strong>Search by Book Title:</strong>
			<input type='text' size='32' name='title' value='Web'>
				<input type='submit' name='act' value='List the titles'> 
				<input type='submit' name='act' value='Help'> 
				<input type='reset'	value='Reset'><br />
			</font>
		</td>
		</tr>
	</form> 
	</table>
	</center>
";

#manage shopping cart
	#each cart entry has quantity to purchase and hyperlinked title
	#if quantity is 0, remove from cart
	#show total for price of all books in cart

#list their own info (id, name, hyperlinked titles and quantities of purchased books, and total amount spent on books

#show details of a book by clicking on linked titles (isbn, title, and price)

"
	</font>
	</body>	
	</html>
		";
}
?>
