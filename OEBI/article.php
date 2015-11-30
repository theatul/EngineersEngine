<?php 
include('db.php');
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine.com-Engineering Books,Jobs,Projects & Technical stuff</title>
<Meta name="description" content="Get Free Engineering Books,Engineering Jobs,Major and Minor Project source code,Tecnical Articles,Best Tecnical Blogs,Free Tecnical Books,Indian Universities,latest Tecnical News and more..">
<meta name="google-site-verification" content="ReHypjuMAkwlmbv3uJLsrSI7CJsAAImvdqSnB6Gzv-c" />
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_22.css" />
<script src="js/stuHover.js" type="text/javascript"></script>
</head>

<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
	<div class="mainbody">
	<div id="bodyleft">
		<?php include('include/leftLinks.php'); ?>
		<?php //include('include/joke.php'); ?>
	</div>		
	
	<div id="bodymiddle">
		<img src="<?php echo IMAGEPATH;?>Top2.jpg" alt="All Face of Engineers Life" />
		
		<div id="text">
		<p>
		<h1>&nbsp;</h1>
		<?php
			$ext = substr(strrchr($_GET['fname'], "."), 1);
			//echo $ext;
			if($ext!="txt")
			{
			echo "<h1>Download File Here</h1><br><br><br>";
			echo "<A href=upload/".$_GET['fname']."><h2><center><img src=images/download.jpg alt=download border=0/></center></h2></a>";
			}
			else
			{
			$name='upload/'.$_GET['fname'];
			$file = fopen($name, "r") or exit("Unable to open file!");
			//Output a line of the file until the end is reached
			while(!feof($file))
 			 {
 				 echo fgets($file). "<br />";
  			}
			fclose($file);
			}
		?>
		</p>
		</div>
		
		
		</div>
	
	<div id="bodyright">
		<?php include('include/oebilinks.php'); ?>
		<?php //include('include/right.php'); ?>
		
	</div>
	</div>

<div id="footer">
	<?php include('include/footer.php');?>
</div>

</body>
</html>