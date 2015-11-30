<?php 
/*if (isset($_SESSION['signup']))
{
header( 'Location: sign.php' ) ;
}*/
include("db.php");
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OEBI Signup</title>
<Meta name="description" content="Sign up and get start in this dream free world of books...">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#register").validate();
  });
</script>
<script src="http://www.engineersengine.com/js/stuHover.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css"/>
</head>

<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
	<div class="mainbody">
		
	<div id="bodymiddle">
	
		<?php 
		if (isset($_SESSION['url']))
			{
			echo "<Font color=#ff0000>Please fill this Form. You are just one step away..<br></font>";
			
			}
		if (isset($_SESSION['error']))
		{
		echo "<Font color=#ff0000>Email id allready registered </font>";
		unset($_SESSION['error']);
		}
		if (isset($_SESSION['nou']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter username<br></font>";
		unset($_SESSION['nou']);
		}
		if (isset($_SESSION['nop']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter Password<br></font>";
		unset($_SESSION['nop']);
		}
		if (isset($_SESSION['nomail']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter valid email adderess.<br></font>";
		unset($_SESSION['nomail']);
		}
		if (isset($_SESSION['nosec']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter valid security code.<br></font>";
		unset($_SESSION['nosec']);
		}
		if (isset($_SESSION['username']))
		{
		echo "<Font color=#ff0000>You are allready signed in as ".$_SESSION['username']."</font>";
		
		}
		else
		{?>
		<form action="register.php" method="post" id="register">
			<table border="0" align="right" cellpadding="10" cellspacing="10" width="75%">
			<tr>
			<td width="25%" align="left">Email (Login Name):<span class="span">*</span></td>
			<td width="50%" align="left"> <input name="email" type="text" class="required email" /></td>
			</tr>
			<tr>
			<tr>
			<td width="25%" align="left">Password :<span class="span">*</span></td>
			<td width="50%" align="left"> <input type="password" name="password" class="required" minlength="4" /></td>
			</tr>
			
			<td align="left" width="25%">Security Code:<span class="span">*</span> </td>
			<td><img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br /><br />
			<input id="security_code" name="security_code" type="text" class="required" />
			</td>
			</tr>
			<tr>
			<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
			</tr>
			</table>
		</form>
		<?php }?>
			
		</div>
	<div id="bodyright">
		<?php include('include/oebilinks.php');?>
		
	</div>
	</div>

<div id="footer">
	<?php include('include/footer.php');?>
</div>

</body>
</html>