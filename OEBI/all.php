<?php 
include('db.php');
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine Open Engineering Books Initiative(OEBI)</title>
<Meta name="description" content="Get And create Free Open Books For Engineering,Major and Minor Project source code,Tecnical Articles,Free Tecnical Books and more..">
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />
<script src="js/stuHover.js" type="text/javascript"></script>
</head>

<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
	<div class="mainbody">
		
	<div id="bodymiddle">
	<?php
	if (isset($_SESSION['updone']))
	{
	echo "<Font color=#ff0000 size='4px'><center>Congratulations!! You have Successfully added your file.It will be avilable online soon after verification . </center></font>";
			unset($_SESSION['updone']);
	}
	?>
	<div id="text">
		<?php include('include/all.php');?>
	</div>
	
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