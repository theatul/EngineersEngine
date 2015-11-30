<?php
session_start();

$userid	=	$_REQUEST['userid'];
$password	=	$_REQUEST['password'];

include('conn.php');

$sql	=	"select * from admin where UserName='$userid' AND Password='$password'";
$res	=	mysql_query($sql);

if(mysql_num_rows($res)>0)
{
	$row	=	mysql_fetch_array($res);
	$username	=	$row['UserName'];
	$_SESSION['UserName']	=	$username;
	$_SESSION['islogin']	=	'true';
	header('Location:admin_home.php');
}
else
{
	$_SESSION['err']	=	"Invalid user name or password";
	header('Location:index.php');
}
?>