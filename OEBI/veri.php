<?php
include('db.php');
$cars=array(" lund "," sex "," fuck "," fucker ","sex","lund","fuck"); 
$log = fopen('log.txt', "a") or exit("Unable to open file!");
fwrite ($log,"errror log.............\n");
$sql = mysql_query("SELECT fileid FROM files");
while($row = mysql_fetch_array($sql))
  {
  $file = fopen('upload/'.$row['fileid'], "r") or exit("Unable to open file!");
  $fileid=$row['fileid'];
  $error=0;
  while(!feof($file))
  {
  $str=fgets($file);
  foreach ($cars as $word)
  {
  
   if (strpos($str,$word)>0)
   {
   echo $row['fileid'].$num."<br>";
   fwrite ($log,$row['fileid']);
   echo $str;
   fwrite ($log,$str);
   //$num=$num+1;
   $error=1;
   }
  }
   
  }
  if($error==0)
  {
  mysql_query("UPDATE files SET valid='1' WHERE `fileid` = '$fileid'") or die (mysql_error());
  $error=0;
 	}	
  }
?> 