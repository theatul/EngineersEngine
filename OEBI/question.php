<?php
include("db.php");
include('include/path_admin.php');



// validations.................
$error=0;
	if($_POST['question']=="")
	{
	$_SESSION['noq'] = 0;
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
	header( 'Location: help.php' ) ;
	exit;
	}
	
//validations ends.............	

















//Prevent SQL injections
$question = $_POST['question'];

mysql_select_db("engineer");

mysql_query("INSERT INTO question (que) VALUES ( '$question')") or die (mysql_error());
$_SESSION['done'] = 0;
header( 'Location: help.php' ) ;

//echo "Account created.";


 
?>