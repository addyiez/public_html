<?php
include('connection.php');
session_start();

$id=$_SESSION['member_id'];

$qry=$connection->query("select * from recevier  where id='$id' ");
$row=mysqli_fetch_array($qry);

$mygroup=$row['bgroup'];
$status=true;
//echo $mygroup;
?>


<link rel="stylesheet" href="bloodbank.css">

<div style="height:70px;border:3px solid red;border-top:5px solid red;">

<div class="div">
<img style="width:100%;height:100%;border-radius:50%" src="images-3.jpeg">
</div>

<div class="div" style="float:left;padding-top:15px;padding-left:10px;width:10%;font-size:20">
BloodBank.com
</div>



<div class="div2" >
<a class="a" href="logout.php">logout</a>
</div>
<div class="div2" >
<a class="a" href="myacceptedrequests.php">Accepted Requests</a>
</div>
<div class="div2" >
<a class="a" href="bloodbank_services.php">Available Blood</a>
</div>
<div class="div2" >
<a class="a" href="receiverdashbord.php">My Home Page</a>
</div>
<div class="div2" >
<a class="a" href="myrequests.php">My requests</a>
</div>

</div>

<div style="width:70%;margin-left:15%;margin-right:15%;font-size:24;padding-top:5%;color:red;">
<b>Stock Availability</b>
<hr>
<table>
<tr>
<th> Sno </th>
<th style="width:500px;padding-left:20px"> Blood Bank</th>
<th style="width:250px;padding-left:20px"> Availabilty</th>
<th style="width:150px;padding-left:20px"> Request</th>
</tr>
<?php
$qry=$connection->query("select * from blood_bank");
$sno=0;
while($row=mysqli_fetch_array($qry))
{
	$sno=$sno+1;
	 $bg=$row['bgroup'];
	 $bname=$row['bank_name'];
	 $hemail=$row['email'];
	 //echo "sss",$bg;
	 //echo $status;
      
	 if($mygroup==$bg)
	 {
		  //echo"ww",$row['bgroup'];
	 	//echo strcmp($mygroup,$bg);
		 $status=false;
		 //echo "ss",$status;
	 }
	 
	?>
<tr>
<td> <?php echo $sno; ?></td>
<td style="width:500px;padding-left:20px"> <?php  echo $row['bank_name'];?></td>
<td style="width:250px;padding-left:20px"> <?php echo $row['bgroup'];?></td>
<td style="width:150px;padding-left:20px"> <input  style="font-size:15;background:red;width:100%;border-radius:30px;" type="button"   onclick="show('<?php echo $id;?>','<?php echo $bname;?>','<?php echo $hemail;?>')"value="Sample Request"    <?php if ($status) { echo 'disabled="disabled"';}



?>> <?php  $status;?></td>
</tr>
<?php
$status=true;
}
?>

</table>
</div>
<script>
function   show(id,bname,hemail)
{
	//alert(id)
	location.href="mrequest.php?id="+id+"&bname="+bname+"&hemail="+hemail;
	
}

</script>