<?php session_start();

$id_edit	=	$_REQUEST['id']; 
$_SESSION['id_edit']	=	$id_edit;

//echo "$id_edit";

include('../include/conn.php');

$sql	=	"select * from newuserreg WHERE id='$id_edit'";
$res	=	mysql_query($sql);

if(mysql_num_rows($res)>0)
{
	$row	=	mysql_fetch_array($res);
	$Email	=	$row['Email'];
	
	$Name	=	$row['Name'];
	$DOB	=	$row['DOB'];
	
	$Sex	=	$row['Sex'];
	$Address	=	$row['Address'];
	$City	=	$row['City'];
	$State	=	$row['State'];
	$Country	=	$row['Country'];
	$AboutMe	=	$row['AboutMe'];
	$hobby	=	$row['hobby'];
	$Contact	=	$row['Contact'];
	$photo	=	$row['photo'];
	$UserName	=	$row['UserName'];
	
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Edit Information</title>

<link rel="stylesheet" href="../css/new.css" />

<!--<script type="text/javascript">
function validate(){
if(document.reg.FName.value==''){
	alert('PLease provide first name');
	return false;
}
else if(document.reg.LName.value==''){
	alert('PLease provide last name');
	return false;
}
else if(document.reg.Month.value==''){
	alert('PLease provide Month');
	return false;
}
else if(document.reg.Date.value==''){
	alert('PLease provide Date');
	return false;
}
else if(document.reg.Year.value==''){
	alert('PLease provide Year');
	return false;
}
else if(document.reg.Sex.value==''){
	alert('PLease provide Sex');
	return false;
}
else if(document.reg.City.value==''){
	alert('PLease provide City');
	return false;
}
}
</script>-->

</head>

<body bgcolor="#99CCFF">
<?php
	include('../include/header.php');
	?>

<table align="center" border="1" width="60%" cellpadding="10" cellspacing="10" class="home">
<form action="edit_action.php" name="reg" method="post" onsubmit="return validate();">
<tr>
 <td width="50%" align="left">First Name:<span class="span">*</span></td>
 <td><input type="text" name="FName" maxlength="35" value="<?php echo "$Name";?>"/><br /></td>
 </tr>
 <tr>
 <td width="50%" align="left">Last Name:<span class="span">*</span></td>
 <td><input type="text" name="LName" maxlength="35"/></td>
</tr>

<tr>
<td width="50%" align="left">Date Of Birth:<span class="span">*</span></td>
<td width="50%" align="left">

<select name="Month">
<option value="Jan"> Jan</option><option value="feb"> feb</option>
<option value="Mar"> Mar</option><option value="Apr"> apr</option>
<option value="May"> May</option><option value="Jun"> Jun</option>
<option value="Jul"> Jul</option><option value="Aug"> Aug</option>
<option value="Sep"> Sep</option><option value="Oct"> Oct</option>
<option value="Nov"> Nov</option><option value="Dec"> Dec</option>
</select>
&nbsp;&nbsp;&nbsp;
<select name="Date">

<option value="1">1</option><option value="2">2</option><option value="3">3</option>
<option value="4">4</option><option value="5">5</option><option value="6">6</option>
<option value="7">7</option><option value="8">8</option><option value="9">9</option>
<option value="10">10</option><option value="11">11</option><option value="12">12</option>
<option value="13">13</option><option value="14">14</option><option value="15">15</option>
<option value="16">16</option><option value="17">17</option><option value="18">18</option>
<option value="19">19</option><option value="20">20</option><option value="21">21</option>
<option value="22">22</option><option value="23">23</option><option value="24">24</option>
<option value="25">25</option><option value="26">26</option><option value="27">27</option>
<option value="28">28</option><option value="29">29</option><option value="30">30</option>

<option value="31">31</option>
</select>
&nbsp;&nbsp;&nbsp;
<select name="Year">

<option value="1991">1991</option><option value="1990">1990</option>
<option value="1989">1989</option><option value="1988">1988</option>
<option value="1987">1987</option><option value="1988">1986</option>
<option value="1985">1985</option><option value="1988">1984</option>
<option value="1983">1983</option><option value="1982">1982</option>
<option value="1981">1981</option><option value="1980">1980</option>
</select>
</td>
</tr>


<tr>
<td width="50%" align="left"> Sex :<span class="span">*</span></td>
<td width="50%" align="left"><input type="radio" name="Sex" value="male">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="Sex" value="Female">Female	</td>
</tr>

	
<tr>
<td width="50%" align="left">Address:</td>
<td><textarea name="Address" rows=3> </textarea></td>
</tr>

<tr>
<td width="50%" align="left"> City:<span class="span">*</span></td>
<td width="50%" align="left"><input type="text" name="City" maxlength="30" value="<?php echo "$City";?>"/></td>
</tr>

<tr>
<td width="50%" align="left">State:<span class="span">*</span></td>
<td width="50%" align="left"><input type="text" name="State" maxlength="30" value="<?php echo "$State";?>"/></td>
</tr>


<tr>
<td width="50%" align="left">country:<span class="span">*</span></td>
<td width="50%" align="left"><input type="text" name="Country" maxlength="30" value="<?php echo "$Country";?>"/></td>
</tr>
	
<tr>
<td width="50%" align="left">About Me:<span class="span">*</span></td>
<td width="50%" align="left"><textarea name="AboutMe" rows=4 > </textarea></td>
</tr>

<tr>
<td width="50%" align="left">Hobbies:<span class="span">*</span></td>
<td width="50%" align="left"><input type="checkbox" name="hobby[]" value="cricket" />cricket
								<input type="checkbox" name="hobby[]" value="Footbal" />Football<br />
								<input type="checkbox" name="hobby[]" value="bollyboll" />bollyboll</td>
</tr>

<tr>
<td width="50%" align="left">Contact Number:</td>
<td width="50%" align="left"><input type="text" name="Contact" maxlength="10" value="<?php echo "$Contact";?>"/>  </td>
</tr>

<tr>
<td width="50%" align="left">E-mail:<span class="span">*</span></td>
<td width="50%" align="left"><input type="text" name="Email" value="<?php echo "$Email";?>"/>  </td>
</tr>


<tr>
<td width="50%" align="left">Upload Image:</td>
<td width="50%" align="left"><input type="file" name="photo"/></td>
</tr>

<tr>
<td width="50%" align="left">User Name:<span class="span">*</span></td>
<td width="50%" align="left"><input type="text" name="UserName" value="<?php echo "$UserName";?>"/></td>
</tr>

<tr>
<td width="50%" align="left">Password:<span class="span">*</span></td>
<td width="50%" align="left"><input type="password" name="Password" value=""/></td>
</tr>


<tr>
<td width="50%" align="center"><input type="submit" value="Submit"/>  </td>
<td width="50%" align="center"><input type="button" value="<?php echo a;?>" onclick="window.location.href='index.php'"/>  </td>
</tr>


</form>
</table>

<?php
	include('../include/footer.php');
	?>

</body>
</html>
