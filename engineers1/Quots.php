<?php 
session_start();
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine-Motivational Quots,Inspirational Quots</title>
<Meta name="description" content="Motivational and Inspirational Quots From gretest people of earth which make you feel confident and Energetic">
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
		<?php include('include/quotsdata.php'); ?>
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