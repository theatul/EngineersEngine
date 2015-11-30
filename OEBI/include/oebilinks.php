						<table align="Left" width="100%" cellspacing="0" border="0" height="34px" >
								<tr>
								<td height="34px"  ><a href="<?php echo OEBIMAIN;?>index.php" >OEBI Central</a></td>
								</tr>
								<tr>
								<td height="34px" ><a href="<?php echo OEBIMAIN;?>features.php" >Features</a></td>
								</tr>
								<tr>
								<td height="34px"  ><a href="<?php echo OEBIMAIN;?>upload.php" >Upload</a></td>
								</tr>
								<tr>
								<td height="34px" ><a href="<?php echo OEBIMAIN;?>writersguide.php" >Writer's Guide</a></td>
								</tr>
								<tr>
								<td height="34px" ><a href="<?php echo OEBIMAIN;?>editorsguide.php" >Editor's Guide</a></td>
								</tr>
								<tr>
								<td height="34px" ><a href="<?php echo OEBIMAIN;?>help.php" >Help</a></td>
								</tr>
								<tr>
								<td height="34px" ><a href="<?php echo OEBIMAIN;?>help.php" >FAQ's</a></td>
								</tr>
								<tr>
								<td>&nbsp;
								
								</td>
								</tr>
								<tr>
								<td>
								<?php
								if (!isset($_SESSION['username']))
								{
								include ('loginfront.php');
								}
								?>
								</td>
								</tr>
								<tr>
								<td height="34px" >
								<b>All Books</b>
								</tr>
								</td>
								<?php
									$sql = mysql_query("SELECT branchname FROM branch ");
										//check to see how many rows were returne
										//$rows = mysql_num_rows($sql);
										while($row = mysql_fetch_array($sql))
 					 						{
  												echo "<tr><td height=34px>";
												echo ("<a href=".OEBIMAIN."all.php>".$row['branchname']."</a>");
												echo "</tr></td>";
												
											}
								?>
							</table>