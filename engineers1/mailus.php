<?php 
session_start();
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine-Mail us</title>
<Meta name="description" content="Mail us and share your technicle problems or suggestions and more..">

<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />
<script src="js/stuHover.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
	<div class="mainbody">
	<div id="bodyleft">
		<?php include('include/LeftLinks.php'); ?>
		<?php //include('include/joke.php'); ?>
	</div>		
	
	<div id="bodymiddle">
		<img src="<?php echo IMAGEPATH;?>Top2.jpg" alt="All Face of Engineers Life" />
		<table>
					<tr>
						<td height="300px" align="center">
						<form action="mailus_action.php" method="post" name="mailus" enctype="multipart/form-data">
							<table width="60%" align="center" cellpadding="10" cellspacing="10">
							<tr>
								<td width="50%" align="left">Name:<span class="span">*</span></td>
								<td align="left"><input type="text" name="name" maxlength="35"/><br /></td>
							</tr>
							<tr>
								<td width="50%" align="left">Email:<span class="span">*</span></td>
								<td align="left"><input type="text" name="email" maxlength="35"/></td>
							</tr>
							<tr>
								<td width="50%" align="left">Subject:<span class="span">*</span></td>
								<td align="left"><input type="text" name="email" maxlength="35"/></td>
							</tr>
							<tr>
								<td width="50%" align="left">Query:<span class="span">*</span></td>
								<td align="left"><textarea name="Address" rows=4> </textarea></td>
							</tr>	
							<tr>
								<td width="50%" align="center">
								<input type="submit" value="Submit"/>&nbsp;&nbsp;&nbsp;&nbsp;
								</td>
								<td width="50%" align="center">
								<input type="button" value="Cancel" onclick="window.location.href='index.php'"/>
								</td>
							</tr>		
							</table>
							</form>
						</td>
					</tr>
					</table>
		</div>
	
	<div id="bodyright">
		<?php include('include/predict.php'); ?>
		<?php include('include/right.php'); ?>
		
	</div>
	</div>

<div id="footer">
	<?php include('include/footer.php');?>
</div>

</body>
</html>