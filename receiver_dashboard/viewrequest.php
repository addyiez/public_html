<?php

include"connection.php";

session_start();

$bname=$_SESSION['username'];
$qry=$connection->query("select * from blood_request  where hname='$bname'");


?>
<table>
	<tr>
	
	<th>Name<th>Email<th>Contact<th>Blood Group</th>
	<tr>
	<?php 
	
	 while($row=mysqli_fetch_row($qry))
	 {
	 
	 ?>
	 <th><?php  echo  $row["name"];?><th><php echo  $row["email"];?><th><?php echo $row["contact"];?><th><?php  echo $row["bgroup"];?></th>
	 <tr>
	 <?php
	 }
	 ?>
	 </table>
			