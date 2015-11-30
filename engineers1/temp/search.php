<?php 
define('UPLOAD', "http://127.0.0.1/networks/upload/");
define('IMAGEPATH', "http://127.0.0.1/networks/images/");
?>
<html>

<body>
<?php 
$value	=	$_REQUEST['search'];
$id_search	=	$_SESSION['id'];
//$_SESSION['val']	=	$value;

if($value!=NULL)
{ 
include('conn.php'); 
$sql	=	"select * from newuserreg where UserName like '$value%' and id!='$id_search'";
$res	=	mysql_query($sql);
?>
<table cellpadding="0" cellspacing="0" width="100%" border="1">
<?php
if($res>0)
{
while($row=mysql_fetch_array($res)){
$d=$row['Date'];
$m=$row['Month'];
$y=$row['Year'];
$DOB=$d."/".$m."/".$y;

$f=$row['FName'];
$l=$row['LName'];
$Name=$f." ".$l;
$photo=$row['photo'];

$photo1=UPLOAD.$photo;

?>
<tr>
<TD><img src="<?php echo $photo1;?>" height="50" width="100" border="1"/></TD>
<td>
<?php echo "$Name";echo "<br>"; echo $row['Sex']; echo "<br>";  echo "$DOB"; echo "<br>"; echo $row['City'];echo "<br>"; ?></td>
<td>
<a href="addfriend.php ?id=<?php echo $row['id'];?>"><img src="<?php echo IMAGEPATH;?>add_as_a_friend.gif" align="absmiddle" name="search"/></a><?php echo "<br>";echo "<br>"; ?> <a href="abuse.php ?id=<?php echo $row['id'];?>">Abuse user</a>
</td>
</tr>
<?php
}
}
else
{
$_SESSION['msg']	=	"no result found";
}
?>
</table>
<?php 
}
?>
