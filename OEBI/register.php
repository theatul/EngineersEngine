<?php
include("db.php");
include('include/path_admin.php');

if (isset($_POST['password']) && isset($_POST['email']))
{

// validations.................
$error=0;
	
	if($_POST['password']=="")
	{
	$_SESSION['nop'] = 0;
	$error=1;
	} 
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$_POST['email']))
		{
			$_SESSION['nomail'] = 0;
			$error=1;
		}
		if( $_SESSION['security_code'] != $_POST['security_code'] || empty($_SESSION['security_code'] ) ) 
		{
			$_SESSION['nosec'] = 0;
			unset($_SESSION['security_code']);
			$error=1;
		}
	if($error==1)
	{
	header( 'Location: signup.php' ) ;
	exit;
	}
	
//validations ends.............	

















//Prevent SQL injections
$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
//Get MD5 hash of password
$password = md5($_POST['password']);
//$password =$_POST['password'];
//Check to see if username exists
mysql_select_db("engineer");
$sql = mysql_query("SELECT email FROM usersystem WHERE email = '$email'");
If (mysql_num_rows($sql)>0)
{
$_SESSION['error'] = 0;
header( 'Location: signup.php' ) ;
//echo "Username taken.";
} 
else
{
mysql_query("INSERT INTO usersystem (password, email) VALUES ( '$password', '$email')") or die (mysql_error());
$_SESSION['account'] = 0;
header( 'Location: signin.php' ) ;
}
//echo "Account created.";
}

 
?>