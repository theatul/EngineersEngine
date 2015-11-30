<?php

/*if (isset($_POST['username']) && isset($_POST['password']))
{    
user_login($_POST['username'], $_POST['password']);
}
*/
?>
<html>
<form action="<?php echo OEBIMAIN;?>sign.php" method="post" onSubmit="return validate_form(this)">
<table border="0" align="left" width="120px">
<tr>
<td width="120px" align="left">Email id :<span class="span">*</span></td>
</tr>
<tr>
<td width="120px" align="left"><input name="username" type="text" class="mybox" size="15">
</td></tr>
<tr>
<td width="120px" align="left">Password :<span class="span">*</span></td>
</tr>
<tr >
<td width="120px" align="left"> <input type="password" name="password" class="mybox" size="15">
</td></tr>
<tr ><td align="right" width="140px">
<input type="submit" value="submit" />
</td></tr>
<tr>
<td width="120px" align="left">
<a href="<?php echo OEBIMAIN;?>signup.php" ><center><Font size="2">New User? Sign Up</Font></center></a>

</td>
</tr>
</table>
</form>
</html>