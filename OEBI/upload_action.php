<?php
include("db.php");
//echo $_SESSION['security_code']. $_POST['security_code'];
//validation.........
$error=0;
	if($_POST['Branch']=="0")
	{
	$_SESSION['nobranch'] = 0;
	$error=1;
	} 
	if($_POST['subject']=="0")
	{
	$_SESSION['nosubject'] = 0;
	$error=1;
	} 
	if($_POST['keywords']=="")
	{
	$_SESSION['nokeywords'] = 0;
	$error=1;
	} 
	if($_POST['author']=="")
	{
	$_SESSION['noauthor'] = 0;
	$error=1;
	} 
	if ($_FILES["file"]["error"] > 0)
    {
  //  echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
  	$_SESSION['nofile'] = 0;
	$error=1;
    }
  	else
   		 {
   
	  		$file=$_FILES["file"]["name"];
	  		$ext = substr(strrchr($file, "."), 1);
	  		$randName = md5(rand() * time());
	  		$file = $randName . '.' . $ext;
      		if(move_uploaded_file($_FILES["file"]["tmp_name"],
      		"upload/" . $file))
			{}
			else
			{
			echo "error";
			exit;
			}
			

    	}

if( $_SESSION['security_code'] != $_POST['security_code'] || empty($_SESSION['security_code'] ) ) 
		{
			$_SESSION['nosec'] = 0;
			unset($_SESSION['security_code']);
			$error=1;
		}

	if($error==1)
	{
	header( 'Location: upload.php' ) ;
	exit;
	}


//validation ends.........
















		//include("db.php");
  

$branch=$_REQUEST['Branch'];
if($_REQUEST['subject']=='x')
{
$othersub=$_REQUEST['subjectname'];
mysql_query("INSERT INTO subjects (subname) VALUES ('$othersub')") or die (mysql_error());
$sql = mysql_query("SELECT subid FROM `subjects` WHERE `subname` ='$othersub'")or die (mysql_error());
$row = mysql_fetch_array($sql);
$sub=$row['subid']; 					 

}
else
{$sub=$_REQUEST['subject'];}

$key=$_REQUEST['keywords'];
$author=$_REQUEST['author'];
$uid=$_SESSION['username'];

mysql_query("INSERT INTO files (fileid,branch,sub,keyword,author,userid) VALUES ('$file','$branch','$sub','$key','$author','$uid')") or die (mysql_error());
$_SESSION['updone']=0;
header( 'Location: index.php' ) ;

   

?>
