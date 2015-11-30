<?php
include("db.php");
				$sql = mysql_query("SELECT que FROM question ");
				//check to see how many rows were returne
				//$rows = mysql_num_rows($sql);
				while($row = mysql_fetch_array($sql))
 					 {
  						echo ($row['que']."<br>");
 
  					}
?>
