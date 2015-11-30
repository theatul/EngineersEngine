<?php 
include("db.php");
if(isset($_SESSION['username']))
	{
	
	}
	else
	{
	$_SESSION['url']='upload.php';
	header( 'Location: signin.php' ) ;
	exit;
	}

include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine Open Engineering Books Initiative(OEBI) upload</title>
<Meta name="description" content="Just share your efforts by sharing your content and be a part of this dream free world where Together we will make everyone a winner.">
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
  if (Branch.selectedIndex == 0 )
    {
        alert ( "Please select your Branch." );
		Branch.focus();
		return false;
        //valid = false;
    }
	if (subject.selectedIndex == 0 )
    {
        alert ( "Please select your Subject." );
		subject.focus();
		return false;
        //valid = false;
    }
	else if(subject.value=="x")
	{
	if (validate_required(subjectname,"Please Enter Subject name.")==false)
  {subjectname.focus();return false;}
	}
	
  
  }
}
</script>
<script src="js/stuHover.js" type="text/javascript"></script>
<script type="text/javascript">
var xmlhttp;

function showInputSubject(str)
{

xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
if (str=="x")
{  
var url="othersubject.php";
}
else
{var url="none.php"};
url=url+"?q="+str;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("other").innerHTML=xmlhttp.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
  
return null;
}
</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#upload").validate();
  });
</script>
</head>

<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
	<div class="mainbody">
		
	<div id="bodymiddle">
	<?php 
		
		if (isset($_SESSION['nobranch']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please select your branch.<br></font>";
		unset($_SESSION['nobranch']);
		}
		if (isset($_SESSION['nosubject']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Select Subject<br></font>";
		unset($_SESSION['nosubject']);
		}
		if (isset($_SESSION['nokeywords']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter Kewords related to topic.<br></font>";
		unset($_SESSION['nokeywords']);
		}
		if (isset($_SESSION['nofile']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter A valid file name.<br></font>";
		unset($_SESSION['nofile']);
		}
		if (isset($_SESSION['noauthor']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter Author name.<br></font>";
		unset($_SESSION['noauthor']);
		}
		if (isset($_SESSION['nosec']))
		{
		echo "<Font color=#ff0000><b>Errors:</b></font>";
		echo "<Font color=#ff0000>Please Enter valid security code.<br></font>";
		unset($_SESSION['nosec']);
		}?>
	
	
	
	
	<div id="text">
			<form action="uaction.php" method="post" name="upload" id="upload" onsubmit="return validate_form(this)" enctype="multipart/form-data">
			<table width="75%" align="right" border="0" cellpadding="10" cellspacing="10">
			<tr>
				<td width="25%" align="left" height="50px">Branch :<span class="span">*</span></td>
				<td width="50%" align="left" height="50px">
						<select name="Branch" id="Branch" class="required" />
				<option value="0">select</option>
				<?php
				$sql = mysql_query("SELECT branchid,branchname FROM branch ");
				//check to see how many rows were returne
				//$rows = mysql_num_rows($sql);
				while($row = mysql_fetch_array($sql))
 					 {
  						echo ("<option value=".$row['branchid'].">".$row['branchname']."</option>");
 
  					}
				?>
				</select></td>
			</tr>
			<tr>
				<td width="25%" align="left" height="50px">Subject :<span class="span">*</span></td>
				<td width="50%" align="left" height="50px">
						<select name="subject" onchange="showInputSubject(this.value);" id="subject" class="required" />
				<option value="0">select</option>
				<?php
				$sql = mysql_query("SELECT subid,subname FROM subjects ");
				//check to see how many rows were returne
				//$rows = mysql_num_rows($sql);
				while($row = mysql_fetch_array($sql))
 					 {
  						echo ("<option value=".$row['subid'].">".$row['subname']."</option>");
 
  					}
				?>
				<option value="x">Others</option>
				
				</select>
				<div id="other">
					
				</div>
				</td>
				</tr>
				<tr>
			<td height="25%" align="left">Title :<span class="span">*</span>	</td>
			<td height="50%" align="left"><input type="text" name="keywords" id="keywords" class="required" minlength="4" /></td>
			</tr>
			
			<tr>
			<td height="25%" align="left">File :<span class="span">*</span>	</td>
			<td height="50%" align="left"><input type="file" name="file" id="file" class="required"/>	</td>
			</tr>
			<tr>
				<td height="25%" align="left">Auther :<span class="span">*</span></td>
				<td height="50%" align="left"><input type="text" name="author" class="required" minlength="4" /></td>
			</tr>
			<!--<tr>
				<td height="50px">Submited by :</td>
				<td height="50px"><input type="text" name="subjectname" ></td>
			</tr>-->
			
			<tr>
			<td height="25%" align="left">Security Code:<span class="span">*</span> </td>
			<td height="50%" align="left"><img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br />
				</td>
				</tr>
				<tr>
				<td>&nbsp;
				
				</td>
				<td >
				<input id="security_code" name="security_code" type="text" class="required" />
				</td>
			</tr>
			
			<tr>
			<td colspan="2" height="50px" align="right"><input type="submit" name="save" value="Save" />	</td>
			</tr>
			
			
			
			
			</table>
			</form>
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