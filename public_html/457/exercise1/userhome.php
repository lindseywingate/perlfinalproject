<?php 
session_start();
$_SESSION['customer'];
echo "
<html>
<center>
  <form method='post' action='ListTitles.php'>
  <tr bgcolor='#EDF3FE'>
    <font FACE='Verdana, Arial, Helvetica' SIZE='-1'>
    <strong> &nbsp; Search by Book Title: &nbsp;</strong></font>
    </b> &nbsp;<input type='text' size='32' name='title' value='Web'><font size='0'><br /><br /></font>
    <input type='submit' name='act' value='List the titles'> &nbsp; &nbsp; 
    <input type='submit' name='act' value='Help'> &nbsp; &nbsp;
    <input type='reset'  value='Reset'><br />
   </center></font>
  </td>
 </tr>
 </form> 
 </table>
</center>

  </font>
 </body>
</html>
";

?>
