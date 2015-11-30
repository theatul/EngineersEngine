<?php 
include('db.php');
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OEBI Help</title>
<Meta name="description" content="Ask your question about OEBI,get help and help others.">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#question").validate();
  });
</script>

<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />
<script src="js/stuHover.js" type="text/javascript"></script>
</head>

<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
	<div class="mainbody">
		
	<div id="bodymiddle">
	<div id="text">
		<?php include('include/Help.php');?>
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