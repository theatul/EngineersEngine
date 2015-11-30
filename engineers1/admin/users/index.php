<?php 
session_start();
include('../../include/path_admin.php');
if(isset($_SESSION['islogin']) && $_SESSION['islogin']=='true')
{
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
  <td width="100%" colspan="3" ><?php include('../../include/header.php');?></td>
</tr>
<tr>
  <td width="100%" colspan="3" align="right">
		  <form action="" name="searchbar" method="post">
  <a href="../logout.php"><img src="<?php echo IMAGEPATH;?>logout.GIF" align="absmiddle" /></a>
  <input type="text" name="search"/>
  <input type="image" src="<?php echo IMAGEPATH;?>search_btn.gif" align="absmiddle" name="search"/>

  </form>
 
  </td>
</tr>
<tr>
<td width="100%" height="180px"><marquee direction="left" behavior="alternate">
<img src="<?php echo IMAGEPATH;?>1006.jpg" />
<img src="<?php echo IMAGEPATH;?>2r5clc6.jpg" />
<img src="<?php echo IMAGEPATH;?>4j2421.jpg" />
<img src="<?php echo IMAGEPATH;?>11t1pfr.jpg" />
<img src="<?php echo IMAGEPATH;?>otgajk.gif" />
<img src="<?php echo IMAGEPATH;?>28ixqit.jpg" />
<img src="<?php echo IMAGEPATH;?>a0vupe.jpg" />
<img src="<?php echo IMAGEPATH;?>bhb.bmp" />
<img src="<?php echo IMAGEPATH;?>1007.jpg" />
 </marquee>
	</td>
</tr>
<tr>
	<td class="home"> Users List...!<?php include('../search.php');?>	</td>
</tr>
 <tr>
    <td width="100%" colspan="3"><?php include('../../include/footer.php'); ?></td>
 </tr>
 </table> 

</body>
</html>
<?php 
}
else
{ 
//echo "Dont be over smart.... login please go to admin index";
	header('location:../index.php');
}
?>
 