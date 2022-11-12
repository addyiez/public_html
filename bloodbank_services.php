<?php
include('connection.php');

?>

<link rel="stylesheet" href="bloodbank.css">

<div style="height:50px;border:3px solid red;border-top:5px solid red;">

<div class="div">
<img style="width:100%;height:100%;border-radius:50%" src="images-3.jpeg">
</div>

<div class="div" style="float:left;padding-top:15px;padding-left:10px;width:10%;font-size:20">
BloodBank.com
</div>


<div class="div2" >
<a class="a" href="bloodbank_signup.html">Sign-up</a>
</div>

<div class="div2" >
<a class="a" href="bloodbank_login.html"> Bank Login</a>
</div>
<div class="div2" >
<a class="a" href="recevier_login.html">ReceiverLogin</a>
</div>

<div class="div2" >
<a class="a" href="bloodbank_signup1.html">Receiver Signup</a>
</div>
<div class="div2" >
<a class="a" href="bloodbank_services.php">Sample  Avaliable</a>
</div>

<div class="div2" >
<a class="a" href="index.html">Home</a>
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
	?>
<tr>
<td> <?php echo $sno ?></td>
<td style="width:500px;padding-left:20px"> <?php  echo $row['bank_name'];?></td>
<td style="width:250px;padding-left:20px"> <?php echo $row['bgroup'];?></td>
<td style="width:150px;padding-left:20px"> <input  style="font-size:15;background:red;width:100%;border-radius:30px;" type="button"   onclick="show()"value="Sample Request"></td>
</tr>
<?php
}
?>

</table>
</div>
<script>

function  show()
{
	var email=prompt("Enter Email");
	location.href="chk.php?email="+email;
	
}
</script>