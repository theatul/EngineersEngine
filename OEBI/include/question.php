<TABLE WIDTH=100% HEIGHT=30  BORDER=0 CELLSPACING=0 CELLPADDING=0>
	<TR HEIGHT=20  bgcolor="#ffeeff"  >
	<TD WIDTH=50% colspan="2"><FONT FACE="Tahoma" SIZE=4 Color="#000000" ><Center>Feed Back...</Center></font></td>
	</TR>

<form action="<?php echo OEBIMAIN;?>question.php" method="post" id="question">
			<table border="0" align="left" cellpadding="10" cellspacing="10" width="70%" >
			<tr>
			<td width="50%" align="left" colspan="2" class="feedback">
			<?php
		if (isset($_SESSION['noq']))
		{
		echo "<Font color=#ff0000>Question Field Should not be blank.<br></font>";
		unset($_SESSION['noq']);
		}
		if (isset($_SESSION['nosec']))
		{
		echo "<Font color=#ff0000>Plaese Enter Correct Security Code.<br></font>";
		unset($_SESSION['nosec']);
		}
		if (isset($_SESSION['done']))
		{
		echo "<Font color=#ff0000>Your quesstion reached us Succesfully. We will answer it soon.<br></font>";
		unset($_SESSION['done']);
		}
?>
			
			
					
			
			Have Any question or suggestion? tell us..... :</td></tr>
			<tr>
			<td width="50%%" align="left" colspan="2"><input name="question" type="text"  class="required" size="60" id="question"/></td>
			</tr>
			
			<tr>
			<td align="left" width="15%" class="feedback">Security Code:<span class="span">*</span> </td>
			
			<td align="left"><img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br /><br />
			<input id="security_code" name="security_code" type="text" class="required" />
			</td>
			</tr>
			
			<tr>
			<td align="left" colspan="2"><input type="submit" value="Submit" /></td>
			</tr>
			
			</table>
		</form>
		