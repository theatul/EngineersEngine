<?php 
session_start();
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine-Registration</title>
<Meta name="description" content="Regester your self and get free technicle news and articles and more at your inbox.">
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />

<script src="js/stuHover.js" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script> 
<script>
$(document).ready(function() { 
$("#signup").validate({ 
email: { required: true, email: true });
</script>
</head>

<body bgcolor="#FFFFFF">

<table align="center" width="100%" frame="below" border="0">
  <tr>
    <td width="100%" colspan="2">
	<?php
	include('include/header.php');
	?>
	</td>
  </tr>
  

<tr>
	<td width="100%" height="500px" colspan="2">
  		<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="500px" width="15%">
					<table border="0" width="100%">
						<tr>
							<td height="300px"> 
								<?php
								include('include/LeftLinks.php');
								?>
							</td>
						</tr>
						<tr>
							<td height="50px">&nbsp;</td>
						</tr>
						<tr>
							<td height="150px" background="<?php echo IMAGEPATH;?>200x150.gif">&nbsp;</td>
						</tr>
					</table>
				</td>
				<td height="500px" width="70%">
				<table width="100%" height="500px" border="0" class="middle">
					<tr>
						<td height="140px" background="<?php echo IMAGEPATH;?>Top2.JPG">&nbsp;</td>
					</tr>
					<tr>
						<td width="100%" height="20px" > <marquee direction="left"> Welcome ! This Site is under Construction. We do not Gurantee any link to work properly untill next update. </marquee></td>
					</tr>
					<tr>
						<td height="300px">
						<form action="registration_action.php" id="signup" name="reg" method="post" enctype="multipart/form-data" onsubmit="return validate();">
						<table align="center" border="0" width="60%" cellpadding="10" cellspacing="10" class="home">
						<tr>
						<td width="50%" align="left">User Name:<span class="span">*</span></td>
						<td width="50%" align="left"><input type="text" name="UserName"/>
							<?php	//echo $_SESSION['usr']; unset($_SESSION['usr']);?>
							</td>
						</tr>
						
						<tr>
						<td width="50%" align="left">Password:<span class="span">*</span></td>
						<td width="50%" align="left"><input type="password" name="Password"/>
						<?php	//echo $_SESSION['pass']; unset($_SESSION['pass']);?>
						</td>
						</tr>
						
						<tr>
						<td width="50%" align="left">E-mail Id:<span class="span">*</span></td>
						<td width="50%" align="left"><input type="text" name="emailid"/></td>
						</tr>
						
						<tr>
						<td width="50%" align="center"><input type="submit" value="Submit"/>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="reset" value="Reset" />  </td>
						<td width="50%" align="center"><input type="button" value="Cancel" onclick="window.location.href='registration.php'"/>  </td>
						</tr>
						</table>
						</form>
						</td>
					</tr>
					<tr>
						<td height="60px">&nbsp;</td>
					<tr>
				</table>
				</td>
				<td height="500px" width="15%">&nbsp;</td>
			</tr>
		</table> 
	</td>
</tr>

<tr>
    <td width="100%" colspan="2">
	<?php
	include('include/footer.php');
	?></td>
</tr>

</table>
</body>
</html>
