<?php 
include("db.php");
include('include/path_admin.php');
if (isset($_POST['username']) && isset($_POST['password']))
{
	$error=0;
	if($_POST['username']=="")
	{
	$_SESSION['nou'] = 0;
	$error=1;
	} 
	if($_POST['password']=="")
	{
	$_SESSION['nop'] = 0;
	$error=1;
	} 
	if($error==1)
	{
	header( 'Location: signin.php' ) ;
	exit;
	}
user_login($_POST['username'], $_POST['password']);
}
//header( 'Location: http://oebi.engineersengine.com/' ) ;

if (isset($_SESSION['username']))
{
if (isset($_SESSION['url']))
{
$url=$_SESSION['url'];
unset($_SESSION['url'] );
header( 'Location:'.$url ) ;

exit;
}
header( 'Location: index.php' ) ;
}
else 
{
$_SESSION['error'] = 0;
header( 'Location: signin.php' ) ;
//echo "Incorrect username/password";
}
?>
