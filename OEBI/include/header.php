<div class="headerbody">
	<div id="headerleft">&nbsp;	</div>
	<div id="headermiddle"><br><br>
		<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;pub=engineersengine" class="addthis_button_compact">Share</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_myspace"></a>
<a class="addthis_button_google"></a>
<a class="addthis_button_twitter"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=engineersengine"></script>
<!-- AddThis Button END -->

	</div>

	<form method="get" action="http://www.google.com/search" name="searchbar" target="_blank">
	<div id="headerright">
		Search&nbsp;:&nbsp;
		<input type="text"   name="q" size="25" maxlength="255" value="" />
		<!--<input type="checkbox"  name="sitesearch" value="www.engineersengine.com" checked /> EE-->
		<input type="image" src="<?php echo IMAGEPATH;?>searchicon333.gif"><br><br>
		<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0">
		<tr><td width="77%" align="right">
		<?php 
		if (isset($_SESSION['username']))
		{
			echo "<Font color=#333333><b>".$_SESSION['username']."</b></font>";
		?>
		</td>
		<td width="1%">
		|
		</td>
		<td width="22%" align="left">
		<a href="<?php echo OEBIMAIN;?>logout.php"><font face="Courier" size="2">log out</font></a>
		
		<?php
		}
		else
		{/*
		?>
		<a href="<?php echo OEBIMAIN;?>signup.php"><font face="Courier" size="2">Sign Up Now</font></a>
		</td>
		<td width="1%">
		|
		</td>
		<td width="49%" align="left">
		<a href="<?php echo OEBIMAIN;?>signin.php"><font face="Courier" size="2">Sign In</font></a>		<?php*/ 
		}?>
		</td>
		</tr>
		</table>
	</div>
	</form>
</div>

<span class="preload1"></span>
<span class="preload2"></span>
<ul id="nav">

	<li class="top"><a href="<?php echo MAIN;?>index.php" class="top_link"><span>Home</span></a></li>
	<!--<li class="top"><a href="jobs.php" id="products" class="top_link"><span class="down">Jobs</span></a>
		<ul class="sub">
			
			
			<li><a href="<?php echo MAIN;?>jobs.php">New Jobs</a></li>
			
			
		</ul>
	</li>-->
	
	<li class="top"><a href="<?php echo MAIN;?>books.php" id="contacts" class="top_link"><span>Library</span></a>
		
	</li>
	<li class="top"><a href="<?php echo MAIN;?>sylb.php?uni=all" id="shop" class="top_link"><span>Syllabus</span></a>
		
	</li>
	<li class="top"><a href="<?php echo MAIN;?>Articles.php" id="privacy" class="top_link"><span>Articles</span></a></li>
	<li class="top"><a href="<?php echo MAIN;?>video.php" id="services" class="top_link"><span>Videos</span></a>
		
	</li>
	<li class="top"><a href="<?php echo OEBIMAIN;?>all.php" id="shop" class="top_link"><span>Open Books</span></a></li>
	
	<li class="top"><a href="<?php echo OEBIMAIN;?>" id="shop" class="top_link"><span>OEBI Central</span></a></li>
	
	<li class="top"><a href="<?php echo OEBIMAIN;?>features.php" id="shop" class="top_link"><span>OEBI Features</span></a></li>
	
	<li class="top"><a href="<?php echo OEBIMAIN;?>help.php" id="shop" class="top_link"><span>OEBI Help</span></a></li>
	


</ul>

