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
<?php include('include/header.php');?>
<div class="bodyleft">
	<div id="left" >
		<?php include('include/LeftLinks.php'); ?>
	</div>
	<div id="middle"  align="left">
		<img src="<?php echo IMAGEPATH;?>Top2.jpg" alt="Top image">&nbsp;</img>
		<marquee direction="left"> <font color=#669900>Welcome ! This Site is under Construction. We do not Gurantee any link to work properly untill next update. </font></marquee>
		<?php include('include/syllabus.php'); ?>
	</div>
	<div id="right">
		<P>adds</p>
	</div>
</div>	
<hr>
<?php include('include/footer.php');?>

</body>
</html>