<?php
session_start();
mysql_connect("localhost", "username of your database", "password of database");
mysql_select_db("myDB");
function user_login ($username, $password)
{
//take the username and prevent SQL injections
$username = mysql_real_escape_string($username);
//begin the query
$sql = mysql_query("SELECT * FROM usersystem WHERE username = 'username' AND password = 'password' LIMIT 1");
//check to see how many rows were returned
$rows = mysql_num_rows($sql);
if ($rows<=0 )
{
echo "Incorrect username/password";
}
else
{
//have them logged in
$_SESSION['sername'] = $username;
}
}
?>