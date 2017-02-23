<?php
if (isset($_COOKIE['customer']))
	ECHO "WELCOME";
else
	echo "Welcome guest!";
echo"
<html>
	<form method='post' action='ListTitles.php'>
		Book title word:
		<input type='text'	 name='title' value='Web' size='32'>
		<input type='submit' name='act'	 value='List the titles'>
		<input type='submit' name='act'	 value='Help'>
		<input type='reset'			         value='Reset'>
	</form>

	<form method='post' action='radio.php'>
		<input name='sex' type='radio' value='female'> Female
		<input name='sex' type='radio' value='male'> Male
		<input type='submit' name='act' value='check'>
	</form>	
";
//size = how many options are shown in dropdown
echo "
	<form method='post' action='dropdown.php'>
		<select multiple='multiple' size='3' name='cats[]'>
			<option>Fluffy</option>
			<option>Selva</option>
			<option>Winston</option>
			<option>Frank</option>
		</select>
		<input type='submit' name='act' value='check'>
	</form>


<form action='8_1.php' method='post' enctype='multipart/form-data'>
  Filename: <input type='file' name='file' id='file' />
  <input type='submit' name='act' value='Check' />
  <input type='submit' name='act' value='PHP' />
  <input type='submit' name='act' value='HTML' />
</form>


</html>
";



?>
