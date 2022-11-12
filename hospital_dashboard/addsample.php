<?php
	session_start();
include('connection.php');
$id=$_SESSION['member_id'];

$qry=$connection->query("select * from  hospital  where id='$id' ");

$row=mysqli_fetch_array($qry);
$bname=$row["name"];
$address=$row["address"];
$city=$row["city"];
$email=$row["email"];
$contact=$row["contact"];
$state=$row["state"];

	

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

<div style="float:left;margin-top:60px;color:red;">Upadate Blood Availability Here</div>
<div  style="width:200px;height:400px;background:red;color:blue">

<table style="margin-top: 100px;" border=1  width=100%  height=200px>

<tr>
	<th>Blood Group</th><th>Set Availability Status</th></tr>
	
	<tr>
		<th>A+ </th>
		<?php 
		$E=$row['email'];
		$B='A+';
		
		$qry=$connection->query("select *  from  blood_bank where email='$E'AND bgroup='A+' ");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0)
        { ?>
		<th><input  type=button  value="Available"  onclick="show('A','P')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('A','P')"></th>
	<?php 
        } 
        ?>
	     </tr>
		
		<tr>
        <th>A- </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='A-'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('A','N')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('A','N')"></th>
	<?php 
        } 
        ?>	</tr>
		
		<tr>
        <th>AB+ </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='AB+'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('AB','P')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('AB','P')"></th>
	<?php 
        } 
        ?>	</tr>
		<tr>
        <th>AB- </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='AB-'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('AB','N')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('AB','N')"></th>
	<?php 
        } 
        ?>	</tr>
        <tr>
        <th>O+ </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='O+'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('O','P')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('O','P')"></th>
	<?php 
        } 
        ?>	</tr>
        <tr>
        <th>O- </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='O-'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('O','N')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('O','N')"></th>
	<?php 
        } 
        ?>	</tr>
        <tr>
        <th>B+ </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='B+'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('B','P')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('B','P')"></th>
	<?php 
        } 
        ?>	</tr>
		<tr>
        <th>B- </th>
		<?php 
		$E=$row['email'];
		$qry=$connection->query("select *  from  blood_bank where email='$E' AND bgroup='B-'");
		$nm=mysqli_num_rows($qry);
		
        if($nm==0){ 
        	?>
		<th><input  type=button  value="Available"  onclick="show('B','N')"></th>
	<?php 
         }
	else{ 
		?>
		<th><input  type=button  value="Unavailable"  onclick="show1('B','N')"></th>
	<?php 
        } 
        ?>	</tr>
		</table>
	</div>
		<script>
		function   show(b,s)
		{
			location.href="addsample1.php?b="+b+"&s="+s;
			
		}
		function   show1(b,s)
		{
			location.href="deletesample1.php?b="+b+"&s="+s;
			
		}
		</script>
		
		