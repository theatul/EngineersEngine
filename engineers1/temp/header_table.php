<?php 
session_start();
include('path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>header</title>
<meta name="Author" content="Stu Nicholls" />

<link rel="stylesheet" type="text/css" href="../css/pro_dropdown_2.css" />

<script src="../js/stuHover.js" type="text/javascript"></script>

</head>
<form method="get" action="http://www.google.com/search" name="searchbar" target="_blank">
<TABLE WIDTH="100%"  HEIGHT="40px" BORDER="1" bgcolor="#FFFFFF">
<TR>
<TD WIDTH="45%" align="top"><img src="<?php echo IMAGEPATH;?>logo.JPG" width="100%" height="45px" alt="EngineersEngineLogo"/></TD>
	
	<td align="center" WIDTH="55%" class="home">
	<input type="text"   name="q" size="25" maxlength="255" value="" />
	<input type="checkbox"  name="sitesearch" value="www.engineersengine.com" checked /> EE
	<input type="image" src="C:\xampp\htdocs\engineers1\images\900_1.jpg" value="Google Search">

	</form>
	<BR>
	<!--
	<a href="<?php// echo MAIN;?>login.php"><font face="Courier" size="2"> &nbsp;Login Now</font></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;-->
	<a href="<?php echo MAIN;?>registration.php"><font face="Courier" size="2">Sign Up Now</font></a>
	
	</td>

</TR>
</TABLE>

<body>
<span class="preload1"></span>
<span class="preload2"></span>


<ul id="nav">
	<li class="top"><a href="index.php" class="top_link"><span>Home</span></a></li>
	<li class="top"><a href="jobs.php" id="products" class="top_link"><span class="down">Jobs</span></a>
		<ul class="sub">
			<li><a href="papers.php" class="fly">Placement Papers</a>
					<ul>
						<li><a href="#nogo4">Infosys</a></li>
						<li><a href="#nogo5">Tech Mahindra</a></li>
						<li><a href="#nogo6">Etc...</a></li>
					</ul>
			</li>
			<li class="mid"><a href="catagory.php" class="fly">Jobs By Catagory</a>
					<ul>
						<li><a href="">Govt Sector Jobs</a></li>
						<li><a href="">Pvt Sector Jobs</a></li>
						<li><a href="" class="fly">Jobs By City</a>
							<ul>
								<li><a href="">Banglore</a></li>
								<li><a href="">Noida</a></li>
								<li><a href="">Delhi</a></li>
								<li><a href="">Jaipur</a></li>
								<li><a href="">Mumbai</a></li>
							</ul>
						</li>
					</ul>
			</li>
			<li><a href="">New Jobs</a></li>
			<li><a href="" class="fly">Jobs by Company</a>
				<ul>
					<li><a href="">Infosys</a></li>
					<li><a href="">Accenture</a></li>
					<li><a href="">A3logics</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">Classified</a>
							<ul>
								<li><a href="">Times of India</a></li>
								<li><a href="">Dainik Bhaskar</a></li>
								<li><a href="">Dainik Bhaskar</a></li>
							</ul>
						</li>
		</ul>
	</li>
	<li class="top"><a href="../downloads.php" id="services" class="top_link"><span class="down">Downloads</span></a>
		<ul class="sub">
			<li><a href="">Softwares</a></li>
			<li><a href="">Utilities</a></li>
			<li><a href="">e-Books</a></li>			
		</ul>
	</li>
	<li class="top"><a href="library.php" id="contacts" class="top_link"><span class="down">Library</span></a>
		<ul class="sub">
			<li><a href="" class="fly">C. S. E.</a>
				<ul>
					<li><a href="#nogo30">III Sem</a></li>
					<li><a href="#nogo31">IV Sem</a></li>
					<li><a href="#nogo32">V Sem</a></li>
					<li><a href="#nogo33">VI Sem</a></li>
					<li><a href="#nogo48">VII Sem</a></li>
					<li><a href="#nogo48">VIII Sem</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">E. & C.</a>
				<ul>
					<li><a href="#nogo30">III Sem</a></li>
					<li><a href="#nogo31">IV Sem</a></li>
					<li><a href="#nogo32">V Sem</a></li>
					<li><a href="#nogo33">VI Sem</a></li>
					<li><a href="#nogo48">VII Sem</a></li>
					<li><a href="#nogo48">VIII Sem</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">I. T.</a>
				<ul>
					<li><a href="#nogo30">III Sem</a></li>
					<li><a href="#nogo31">IV Sem</a></li>
					<li><a href="#nogo32">V Sem</a></li>
					<li><a href="#nogo33">VI Sem</a></li>
					<li><a href="#nogo48">VII Sem</a></li>
					<li><a href="#nogo48">VIII Sem</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">M. E.</a>
				<ul>
					<li><a href="#nogo30">III Sem</a></li>
					<li><a href="#nogo31">IV Sem</a></li>
					<li><a href="#nogo32">V Sem</a></li>
					<li><a href="#nogo33">VI Sem</a></li>
					<li><a href="#nogo48">VII Sem</a></li>
					<li><a href="#nogo48">VIII Sem</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">E. & I.</a>
				<ul>
					<li><a href="#nogo30">III Sem</a></li>
					<li><a href="#nogo31">IV Sem</a></li>
					<li><a href="#nogo32">V Sem</a></li>
					<li><a href="#nogo33">VI Sem</a></li>
					<li><a href="#nogo48">VII Sem</a></li>
					<li><a href="#nogo48">VIII Sem</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">E. E.</a>
				<ul>
					<li><a href="#nogo30">III Sem</a></li>
					<li><a href="#nogo31">IV Sem</a></li>
					<li><a href="#nogo32">V Sem</a></li>
					<li><a href="#nogo33">VI Sem</a></li>
					<li><a href="#nogo48">VII Sem</a></li>
					<li><a href="#nogo48">VIII Sem</a></li>
				</ul>
			</li>
			<li><a href="" class="fly">General</a>
				<ul>
					<li><a href="#nogo30">Communication</a></li>
					<li><a href="#nogo31">English</a></li>
					<li><a href="#nogo32">Management</a></li>
					<li><a href="#nogo33" class="fly">Other</a>
						<ul>
							<li><a href=""> 1 </a></li>
							<li><a href=""> 2 </a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="top"><a href="fun.php" id="shop" class="top_link"><span class="down">Fun Zone</span></a>
		<ul class="sub">
			<li><a href="#nogo54">Jokes</a></li>
			<li><a href="#nogo55">Wallpapers</a></li>
			<li><a href="#nogo56">Bollywood</a></li>
		</ul>
	</li>
	<li class="top"><a href="blog.php" id="privacy" class="top_link"><span>Blogs</span></a></li>
	<li class="top"><a href="video.php" id="services" class="top_link"><span class="down">Videos</span></a>
		<ul class="sub">
			<li><a href="">Class Room</a></li>
			<li><a href="">Funny</a></li>
		</ul>
	</li>
	<li class="top"><a href="engg.php" id="shop" class="top_link">My Engineering</a></li>

</ul>
</body>

</html>
