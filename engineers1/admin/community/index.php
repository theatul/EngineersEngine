<?php 
session_start();
if(isset($_SESSION['msg']) && $_SESSION['msg']!=''){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manage Users</title>
<link href="css/new.css" rel="stylesheet" type="text/css" />
<link href="../../css/new.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#D892DA">
<table width="100%" align="center" border="1">
<tr>
  <td width="100%" colspan="3" ><?php include('../include/header.php');?></td>
</tr>
<tr>
  <td width="100%" colspan="3" ><form action="" name="searchbar" method="post">
  <input type="text" name="search"/>
  <input type="image" src="../../images/search_btn.gif" align="absmiddle" name="search"/>
  </form>
  </td>
</tr>
<tr>
<td width="100%" height="180px"><marquee direction="left" behavior="alternate">
<img src="../images/1006.jpg" />
<img src="../images/2r5clc6.jpg" />
<img src="../images/4j2421.jpg" />
<img src="../images/11t1pfr.jpg" />
<img src="../images/otgajk.gif" />
<img src="../images/28ixqit.jpg" />
<img src="../images/a0vupe.jpg" />
<img src="../images/bhb.bmp" />
<img src="../images/1007.jpg" />
 </marquee>
	</td>
</tr>
<tr>
	<td class="home"> Users List...!<?php include('../search.php');?>	</td>
</tr>
 <tr>
    <td width="100%" colspan="3"><?php include('../include/footer.php'); ?></td>
 </tr>
 </table> 
</body>
</html>