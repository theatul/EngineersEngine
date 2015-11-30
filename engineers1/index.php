<?php 
include('db.php');
include('include/path_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EngineersEngine.com-Engineering Books,Jobs,Projects & Technical stuff</title>
<Meta name="description" content="Get Free Engineering Books,Engineering Jobs,Major and Minor Project source code,Tecnical Articles,Best Tecnical Blogs,Free Tecnical Books,Indian Universities,latest Tecnical News and more..">
<meta name="google-site-verification" content="ReHypjuMAkwlmbv3uJLsrSI7CJsAAImvdqSnB6Gzv-c" />
<link rel="stylesheet" type="text/css" href="css/pro_dropdown_2.css" />
<script src="js/stuHover.js" type="text/javascript"></script>
<script src="js/jquery_002.js" type="text/javascript"></script>
 <script src="js/jquery.js" type="text/javascript"></script>  
 <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=engineersengine"></script>
  <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery(".signin").click(function() { 
                jQuery("fieldset#signin_menu").toggle();
				jQuery(".signin").toggleClass("menu-open");
            });
			
			jQuery("fieldset#signin_menu").mouseup(function() {
				return false
			});
			jQuery(document).mouseup(function(e) {
				if(jQuery(e.target).parent("a.signin").length==0) {
					jQuery(".signin").removeClass("menu-open");
					jQuery("fieldset#signin_menu").hide();
				}
			});			
			
        });
  </script>
  <script type="text/javascript">
    jQuery(function() {
	  jQuery('#forgot_username_link').tipsy({gravity: 'w'});   
    });
  </script>
</head>

<body bgcolor="#ffffff" class="body">
<?php include('include/header.php');?>	
<table align="center" width="100%" border="0">
	<tr>
	<td align="center">
	<!-- Begin: AdBrite, Generated: 2009-12-16 6:48:54  -->
<script type="text/javascript">
var AdBrite_Title_Color = '669900';
var AdBrite_Text_Color = '000000';
var AdBrite_Background_Color = 'FFFFFF';
var AdBrite_Border_Color = 'ffffff';
var AdBrite_URL_Color = '008000';
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
</script>
<span style="white-space:nowrap;"><script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1454308&zs=3732385f3930&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1454308&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-leaderboard.gif" style="background-color:#ffffff;border:none;padding:0;margin:0;" alt="Your Ad Here" width="14" height="90" border="0" /></a></span>
<!-- End: AdBrite --></td></tr></table>
	<div class="mainbody">
	<div id="bodyleft">
		<?php include('include/LeftLinks.php'); ?>
		<?php //include('include/joke.php'); ?>
	</div>		
	
	
	<div id="bodymiddle">
		<!--<img src="<?php //echo IMAGEPATH;?>Top2.jpg" alt="All Face of Engineers Life" />-->
		
		
		<hr>
					<p><font color="#990000">To be crazy about every new
			Idea and working hours for just a crazy thought and coming out with no
			results mostly is not possible for everyone out there except Einstein ,Newton ,Addison  And Engineers...<br>
			 We are <b>EngineersEngine.com.</b>
			 Working day and night to make that craziness even greater and to make
			Your life as engineering student memorable. So let’s begin the journey......</font>
			
			</p><hr>
		<div id="text">
			<?php include('include/eoebi.php'); ?>
			<table width="100%" border="0" align="center">
			<tr>
			<td>
				  <?php include('include/midadd.php'); ?>
				  </td>
				  </tr>
				  </table>
				  
		</div>
		<?php include('include/syllabus.php'); ?>
		<?php include('include/videofront.php'); ?>
		
		</div>
	
	<div id="bodyright">

	 
	 
		<?php include('include/rightadd.php'); ?>
		<?php include('include/right.php'); ?>
		
	</div>
	</div>

<div id="footer">
	<?php include('include/footer.php');?>
</div>

</body>
</html>