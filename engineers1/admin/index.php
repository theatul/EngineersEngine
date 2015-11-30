<?php
session_start();
?>

<html>
<title>Admin_networks-Login</title>
<body bgcolor="#DB9BE3">
<link href="../css/new.css" rel="stylesheet" type="text/css" />
<form action="index_action.php" name="login" method="post">
<?php include('../include/header.php');?>
	<table align="center" border="1" height="250px" width="50%" class="home" bgcolor="#99CCCC">
	
	<tr>
		<td height="50px" class="home" colspan="2">Admin User <img src="../images/hi9go.gif" /></td>
		
	</tr>

	<?php  if(isset($_SESSION['err']) && $_SESSION['err']!=''){	?>
	<tr>
		<td width="100%" colspan="2">
		<?php	echo $_SESSION['err'];	unset($_SESSION['err']);?>
		</td>
	</tr>
	<?php	} ?>
	
	<?php  if(isset($_SESSION['islogin']) && $_SESSION['islogin']=='false'){	?>
	<tr>
		<td width="100%" colspan="2">
		<?php	echo $_SESSION['logout']; unset($_SESSION['logout']);?>
		</td>
	</tr>
	<?php	} ?>
	
	
	
	<tr>
		<td class="home">User Id</td>
		<td><input type="text" name="userid" /></td>
	</tr>
	<tr>
		<td class="home">Password</td>
		<td><input type="password" name="password" /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="image" src="../images/login_btn.gif"/></td>
	</tr>
	
</table>
<?php include('../include/footer.php');?>
</form>
</body>
</html>
