<html>
<body>
<form action="register.php" method="post" onSubmit="return validate_form(this)">
<table border="0" align="center">
<tr height="50px">
<td width="50%" align="left">Username :<span class="span">*</span></td>
<td width="50%" align="left"><input name="username" type="text" />
</td></tr>
<tr height="50px">
<td width="50%" align="left">Password :<span class="span">*</span></td>
<td width="50%" align="left"> <input type="password" name="password" />
</td></tr>
<tr height="50px">
<td width="50%" align="left">Email :<span class="span">*</span></td>
<td width="50%" align="left"> <input name="email" type="text" />
</td></tr>
<tr>
			<td>Security Code:<span class="span">*</span> </td>
			<td><img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br />
				<input id="security_code" name="security_code" type="text" />
				</td>
			</tr>
<tr height="50px"><td align="right" colspan="2">
<input type="submit" value="Submit" />
</td></tr>
</table>
</form>

</body>
</html>
