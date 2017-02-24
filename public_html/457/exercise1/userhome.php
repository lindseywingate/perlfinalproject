<?php 
session_start();
if(!isset($_SESSION['user_id']) || time() - $_SESSION['login_time'] > 1800) {
	echo "Your session has expired. Please login again.";

}	#logout button
else {
	#search, case insensitive - keywords separated by spaces. if query is empty, list all books.
	#add checkbox next to each book to put in cart and hyperlinked title
	echo  "
	<html>
	<center>
			<form method='post' action='ListTitles.php'>
			<tr bgcolor='#EDF3FE'>
			<font FACE='Verdana, Arial, Helvetica' SIZE='-1'>
			<strong> &nbsp; Search by Book Title: &nbsp;</strong></font>
			</b> &nbsp;<input type='text' size='32' name='title' value='Web'><font size='0'><br /><br /></font>
				<input type='submit' name='act' value='List the titles'> &nbsp; &nbsp; 
				<input type='submit' name='act' value='Help'> &nbsp; &nbsp;
				<input type='reset'	value='Reset'><br />
			</center></font>
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
