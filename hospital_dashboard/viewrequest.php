<?php

include"connection.php";

session_start();

$bemail=$_SESSION['email'];

$qry=$connection->query("select * from blood_request  where hemail='$bemail'");


?>
<link rel="stylesheet" href="bloodbank.css">

<div style="height:50px;border:3px solid red;border-top:5px solid red;">

<div class="div">
<img style="width:100%;height:100%;border-radius:50%" src="images-3.jpeg">
</div>

<div class="div" style="float:left;padding-top:15px;padding-left:10px;width:10%;font-size:20">
BloodBank.com
</div>


<?php  echo $_SESSION['username'];?>

<div class="div2" >
<a class="a" href="dashboard.php">My Home Page</a>
</div>

<div class="div2" >
<a class="a" href="acceptedrequests.php">Accepted Requests</a>
</div>

<div class="div2" >
<a class="a" href="viewrequest.php">All Requests</a>
</div>

<div class="div2" >
<a class="a" href="addsample.php">Add Bood</a>
</div>
<div class="div2" >
<a class="a" href="logout.php">logout</a>
</div>

<div style="width:70%;margin-left:15%;margin-right:15%;font-size:24;padding-top:5%;color:red;">
<b>Blood Requests</b>
<hr>

</div>
<table>
<tr>
<th> Sno </th>
<th style="width:250px;padding-left:20px"> Name</th>
<th style="width:250px;padding-left:20px"> Email</th>
<th style="width:150px;padding-left:20px"> Contact</th>
<th style="width:250px;padding-left:20px"> Address</th>
<th style="width:150px;padding-left:20px"> Blood Group</th>
<th colspan="3" px;padding-left:20px">ACCEPT/CANCEL</th>
</tr>
	
	
	<?php 
	$sno=0;
	$status=true;
	$stat=true;
	 while($row=mysqli_fetch_array($qry))
	 {
	 	$uid=$row['id'];
	 	$status1=$row['status'];
	 	$sno=$sno+1;
	 	if($status1=='PENDING')
	 {
		  //echo"ww",$row['bgroup'];
		 $status=false;
		 //echo "ss",$status;
	 }
	 if($stat=='ACCEPTED' || $stat=='CANCELED')
	 {
            $stat=false;
	 }
	 ?>
	 <tr>
<td> <?php echo $sno; ?></td>
<td style="width:250px;padding-left:20px"> <?php  echo $row['name'];?></td>
<td style="width:250px;padding-left:20px"> <?php echo $row['email'];?></td>
<td style="width:150px;padding-left:20px"> <?php echo $row['contact'];?></td>
<td style="width:250px;padding-left:20px"> <?php echo $row['address'];?></td>
<td style="width:150px;padding-left:20px"> <?php echo $row['bgroup'];?></td>

<td style="width:150px;padding-left:20px"> <input  style="font-size:15;background:green;width:100%;border-radius:30px;" type="button"   onclick="show7('<?php echo $uid;?>')"value="ACCEPT"    <?php if ($status) { echo 'disabled="disabled"';}   ?>
> <?php  $status;?></td>	

<td style="width:150px;padding-left:20px"> <input  style="font-size:15;background:red;width:100%;border-radius:30px;" type="button"   onclick="show8('<?php echo $uid;?>')"value="CANCEL"    <?php if ($status) { echo 'disabled="disabled"';}   ?>
> <?php  $status;?></td>

<td style="width:150px;padding-left:20px"> <input  style="font-size:15;background:yellow;width:100%;border-radius:30px;" type="button"   onclick="show9('<?php echo $uid;?>')"value="EDIT STATUS"    <?php if ($stat) { echo 'disabled="disabled"';}   ?>
> <?php  $stat;?></td>

	 </tr>
	 <?php
	 $status=true;
	 $stat=true;
	 }
	 ?>
	 </table>
	</div>
<script>
function   show7(uid)
{
	//alert(id)
	location.href="update.php?uid="+uid;
	
}
function   show8(uid)
{
	//alert(id)
	location.href="updatec.php?uid="+uid;
	
}
function   show9(uid)
{
	//alert(id)
	location.href="updatee.php?uid="+uid;
	
}
</script>