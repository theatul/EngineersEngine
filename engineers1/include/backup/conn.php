<?php
//mysql_connect("mysql01.manashosting.biz","dataadmin","mytest") or die("error in connection");
//mysql_select_db("engineer") or die("error in db select");



$con = mysql_connect("mysql01.manashosting.biz","dataadmin","myaccountatulgovind");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("engineer", $con);
$sql = "CREATE TABLE `files` (
`fileid` INT NOT NULL ,
`branch` VARCHAR(30) NOT NULL,
`sub` VARCHAR(30) NOT NULL,
`keyword` VARCHAR(60) NOT NULL,
`author` VARCHAR(30) NOT NULL,
`userid` VARCHAR(30) NOT NULL,
PRIMARY KEY ( `fileid` )
)";
if (mysql_query("$sql",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

mysql_close($con);


?>