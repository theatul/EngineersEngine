<?php 
session_start();
$id_del	=	$_REQUEST['id']; 
include('../../include/conn.php');
$qu	=	"delete from newuserreg where id='$id_del'";
$res	=	mysql_query($qu);
if($res>0)
{
header('Location:index.php');
}
?>