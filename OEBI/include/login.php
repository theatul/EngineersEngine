<?php

/*if (isset($_POST['username']) && isset($_POST['password']))
{    
user_login($_POST['username'], $_POST['password']);
}
*/
?>
<html>
<form action="sign.php" method="post" onSubmit="return validate_form(this)">
<table border="0" align="center" >
<tr height="50px">
<td width="50%" align="left">Email id :<span class="span">*</span></td>
<td width="50%" align="left"><input name="username" type="text" />
</td></tr>
<tr height="50px">
<td width="50%" align="left">Password :<span class="span">*</span></td>
<td width="50%" align="left"> <input type="password" name="password" />
</td></tr>
<tr height="50px"><td align="right" colspan="2">
<input type="submit" value="submit" />
</td></tr>
</table>
</form>
</html>