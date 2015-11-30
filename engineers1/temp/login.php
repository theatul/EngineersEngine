<?php 
session_start();
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine-Home page</title>
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />
<script src="js/stuHover.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff">
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
						<td height="300px" align="center">
						<form action="login_action.php" name="login" method="post">
						<table height="200px" width="60%" class="home">
						<tr>
							<td height="50px" colspan="2" align="center"><img src="images/hi9go.gif" align="middle" alt="LoginHi"/></td>
						</tr>
						<?php  if(isset($_SESSION['wel']) && $_SESSION['isreg']=='true'){	?>
						<tr>
							<td width="100%" colspan="2">
							<?php	echo $_SESSION['wel']; unset($_SESSION['wel']);?>
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
						<?php if(isset($_SESSION['err']) && $_SESSION['err']!=''){?>
						<tr>
							<td width="100%" colspan="2">
							<?php echo $_SESSION['err']; unset($_SESSION['err']);?>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td class="home">User Id</td>
							<td><input type="text" name="userid" /></td>
						</tr>
						<tr>
							<td id="newid">Password</td>
							<td><input type="password" name="password" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="image" src="images/login_btn.gif"/></td>
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
