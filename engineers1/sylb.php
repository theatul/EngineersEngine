<?php 
session_start();
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine-Engineering Syllabus,Rtu Syllabus,UPTU Syllabus </title>
<Meta name="description" content="Syllabus of Indian Engineering universities,Rajasthan Tecnical University Syllabus,UPTU Syllabus">
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

		<?php
		if ($_GET['uni']=="rtu") 
		{
			include('include/rtusyllabus.php');
		}
		elseif ($_GET['uni']=="uptu") 
		{
			include('include/uptusyllabus.php');
		}
		else
		{
			include('include/rtusyllabus.php');
			
			include('include/uptusyllabus.php');
			
		}
		
		 ?>
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