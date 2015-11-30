<div class="headerbody">

	<div id="headerleft">&nbsp;	</div>
	<div id="headermiddle">
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style">
		<a href="http://www.addthis.com/bookmark.php?v=250&amp;pub=engineersengine" class="addthis_button_compact">Share</a>
		<span class="addthis_separator">|</span>
		<a class="addthis_button_facebook"></a>
		<a class="addthis_button_myspace"></a>
		<a class="addthis_button_google"></a>
		<a class="addthis_button_twitter"></a>
		</div>
		<!-- AddThis Button END -->
	</div>
	<div id="headerright">
	<table border="1" width="100%" align="left" cellpadding="0" cellspacing="0">
	<tr>
		<td height="30px">
		Search: 
		<form method="get" action="http://www.google.com/search" name="searchbar" target="_blank">
		<input type="text"   name="q" size="20" maxlength="255" value="" />
		<!--<input type="checkbox"  name="sitesearch" value="www.engineersengine.com" checked />-->
		<input type="image" src="<?php echo IMAGEPATH;?>searchicon333.gif">
		</form>
		</td>
	</tr>
	<tr>
		<?php 
			if (isset($_SESSION['username']))
			{
				echo "<td><Font color=#333333><b>".$_SESSION['username']."</b></font>";
				echo "|";
				echo "<a href=OEBIMAIN logout.php><font face='Courier' size='2'>log out</font></a></td>";
			}
			else
			{?>
			<td width="23%">
			<a href="" class="signin"><span>Sign in</span></a>
					<div id="topnav" class="topnav">	
					<fieldset style="display: none;" id="signin_menu">
    				<form method="post" id="signin" action="https://twitter.com/sessions">
					<label for="username">Email</label>
					<input gtbfieldid="1" id="username" name="username" title="username" tabindex="4" type="text">
					<p>
					<label for="password">Password</label>
					<input id="password" name="password" value="" title="password" tabindex="5" type="password">
					</p>
					<p class="remember">
					<input id="signin_submit" value="Sign in" tabindex="6" type="submit">
					<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
					<label for="remember">Remember me</label>
					</p>
					
					
					<p class="forgot"><a href="#" id="resend_password_link">Forgot your password?</a></p>
					
					<p class="forgot-username"><a id="forgot_username_link" title="If you remember your password, try logging in with your email" href="#">Forgot your username?</a></p>
					</form>
						</fieldset>
						</div>
			</td>
		<?php } ?>
		</tr>
		</table>
	</div>
	<span class="preload1"></span>
	<span class="preload2"></span>
	<ul id="nav">
		<li class="top"><a href="<?php echo MAIN;?>index.php" class="top_link"><span>Home</span></a></li>
		
		<li class="top"><a href="<?php echo MAIN;?>books.php" id="contacts" class="top_link"><span>Library</span></a></li>
		
		<li class="top"><a href="<?php echo MAIN;?>sylb.php?uni=all" id="shop" class="top_link"><span>Syllabus</span></a></li>
		
		<li class="top"><a href="<?php echo MAIN;?>Articles.php" id="privacy" class="top_link"><span>Articles</span></a></li>
		
		<li class="top"><a href="<?php echo MAIN;?>video.php" id="services" class="top_link"><span>Videos</span></a></li>
		
		<li class="top"><a href="<?php echo OEBIMAIN;?>all.php" id="shop" class="top_link"><span>Open Books</span></a></li>
		
		<li class="top"><a href="<?php echo OEBIMAIN;?>" id="shop" class="top_link"><span>OEBI Central</span></a></li>
		
		<li class="top"><a href="<?php echo OEBIMAIN;?>features.php" id="shop" class="top_link"><span>OEBI Features</span></a></li>
		
		<li class="top"><a href="<?php echo OEBIMAIN;?>help.php" id="shop" class="top_link"><span>OEBI Help</span></a></li>
		
	</ul>
</div>