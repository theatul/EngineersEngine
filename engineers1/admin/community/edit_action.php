<?php
session_start();
$id_edit	=	$_SESSION['id_edit'];

$FName	=	$_REQUEST['FName'];
$LName	=	$_REQUEST['LName'];
$Name	=	$FName.",".$LName;
$Month	=	$_REQUEST['Month'];
$Date	=	$_REQUEST['Date'];
$Year	=	$_REQUEST['Year'];
$DOB	=	$Month."-".$Date."-".$Year;
$Sex	=	$_REQUEST['Sex'];
$Address	=	$_REQUEST['Address'];
$City	=	$_REQUEST['City'];
$State	=	$_REQUEST['State'];
$Country	=	$_REQUEST['Country'];
$AboutMe	=	$_REQUEST['AboutMe'];
$hobby	=	$_REQUEST['hobby'];
$Contact	=	$_REQUEST['Contact'];
$Email	=	$_REQUEST['Email'];
$photo	=	$_REQUEST['photo'];
$UserName	=	$_REQUEST['UserName'];
$Password	=	$_REQUEST['Password'];


//data base connection...

include('../include/conn.php');

//insert data...
/*$sql_findid	=	"select * from newuserreg where id='$id_edit'";
$res	=	mysql_query($sql_findid);
*/
$sql_insert	=	"update newuserreg set Name='$Name',Address='$Address',City='$City',State='$State',Country='$Country',DOB='$DOB', Sex='$Sex',AboutMe='$AboutMe',Contact='$Contact',Email='$Email',photo='$photo',UserName='$UserName',Password='$Password' where id='$id_edit'";
$res	=	mysql_query($sql_insert);

if($res>0)
{
	header('Location:index.php');
}
//$_SESSION['msg']	=	"Successfully registered.";
//exit();
//include(" http://localhost/networks/home.html");
//if(isset($_REQUEST['submit']) && (count($_REQUEST)>0)){
//session_start();
?> 

