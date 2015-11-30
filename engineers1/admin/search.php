<?php session_start();	?>

<html>
<script type="text/javascript">
function conf(){
var con	=	confirm('Are you sure?');

if(con==false){
	return false;
}
}
</script>
<body>
<?php 
$value	=	$_REQUEST['search'];
include('conn.php'); 
$sql	=	"select * from newuserreg where UserName like '$value%'";
$res	=	mysql_query($sql);

?>
<table cellpadding="0" cellspacing="0" width="100%" border="1">
<tr>
<TD>Name</TD>
<TD>City</TD>
<TD>e-Mail</TD>
<TD>Sex</TD>
<TD>DOB</TD>
<td>Edit</td>
<td>Delete</td>
<TD>Status</TD>
</tr>
<?php
while($row=mysql_fetch_array($res)){
$d=$row['Date'];
$m=$row['Month'];
$y=$row['Year'];
$DOB=$d."/".$m."/".$y;

$f=$row['FName'];
$l=$row['LName'];
$Name=$f." ".$l;
?>
<tr>
<TD><?php echo "$Name";?></TD>
<TD><?php echo $row['City'];?></TD>
<TD><?php echo $row['Email'];?></TD>
<TD><?php echo $row['Sex'];?></TD>
<TD><?php echo "$DOB";?></TD>
<td><a href="edit.php ?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>" onClick="return conf();">Delete</a></td>
<TD><a href="status.php?id=<?php echo $row['id'];?>&status=<?php echo $row['status'];?>"><?php if($row['status']=="1"){ echo "Active";}else{ echo "Inactive";}?></a></TD>

</tr>
<?php
}
?>
</table>
