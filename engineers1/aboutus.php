<?php 
session_start();
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine-about us</title>
<Meta name="description" content="To be crazy about every new
Idea and working hours for just a crazy thought and coming out with no
results mostly is not possible for everyone We are Working day and night to make that craziness even greater....">
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
		<p><table width="60%" border="0">
		<tr>
		<td colspan="2"> Contact Person:</td>
		</tr>
		<tr>
		<td>Govind Totla:</td>
		<td> govind@engineersengine.com</td>
		</tr>
		<tr>
		<td>Atul Pandey:</td>
		<td>a@engineersengine.com</td>
		</tr>	
		<tr>
		<td>Gaurav Gangwal:</td>
		<td>admin_gaurav@engineersengine.com</td>
		</tr>				
		</table></p>
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
