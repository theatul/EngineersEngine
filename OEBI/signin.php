<?php 

include("db.php");
include('include/path_admin.php');
//echo $_SESSION['url'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OEBI</title>
<Meta name="description" content="OEBI signIn..">
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />
<script type="text/javascript">
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}
function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(username,"user name must be filled out!")==false)
  {username.focus();return false;}
  if (validate_required(password,"password must be filled out!")==false)
  {password.focus();return false;}
  
  }
}
</script>
<script src="js/stuHover.js" type="text/javascript"></script>
</head>

<body bgcolor="#ffffff" class="body">






<?php include('include/header.php');?>	
	<div class="mainbody">
		
	<div id="bodymiddle">
	
		<?php 
		if (isset($_SESSION['error']))
		{
		echo "<Font color=#ff0000>Incorrect user name/password</font>";
		unset($_SESSION['error']);
		}
		if (isset($_SESSION['nou']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter username<br></font>";
		unset($_SESSION['nou']);
		}
		if (isset($_SESSION['nop']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter Password<br></font>";
		unset($_SESSION['nop']);
		}
		if (isset($_SESSION['account']))
			{
			echo "<Font color=#669900 size='5px'><center>Congratulations!! Your acoount is Successfully Created Please Login And get Started! </center></font>";
			unset($_SESSION['account']);
			}
			
		else if (isset($_SESSION['url']))
		{
			
		//echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>You should sign in first before uploading a file.<a href='signup.php'> Or click here to sign up			</a> if you are a new user.<br></font>";
		//unset($_SESSION['nop']);
		}
		if (isset($_SESSION['username']))
		{
		echo "<Font color=#ff0000>You are allready signed in as ".$_SESSION['username']."</font>";
		}
		
		else
		include('include/login.php');?>
	
	
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