<?php
include('connection.php');
session_start();

$id=$_SESSION['member_id'];

$qry=$connection->query("select * from recevier  where id='$id' ");
$row=mysqli_fetch_array($qry);
$user=$row['name'];
$mygroup=$row['bgroup'];
$status=true;
//echo $mygroup;
?>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 1380px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.backgroundBody  {
    background-color :FFE4C4;
    height:100%;
     background-image: url("blood-bank.jpeg");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover; 
  
}
</style>

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

<b>HELLO <?php echo $user; ?></b>
<hr>
    </div>
<div class="backgroundBody">
    <div class="dropdown">
  <span style="margin-left:600px; font-size: 20px;"> Available blood</span>
  <div class="dropdown-content">
 Displays all the available blood samples along with which hospital has them and a ‘Request Sample’ button. This page is accessible to everyone, irrespective of whether the user is logged in or not. 


</div>
</div>
<br><br><br>
 <br>
     <div class="dropdown">
  <span style="margin-left:600px; font-size: 20px;"> My Requests</span>
  <div class="dropdown-content">
 Displays all the blood request you have made from which which Hospital/Blood Bank  


</div>
</div>
<br><br><br>
 <br>
   <div class="dropdown">
  <span style="margin-left:600px; font-size: 20px;"> Accepted Requests</span>
  <div class="dropdown-content">
 Displays the blood request which are accepted by Hospitals/blood Bank.


</div>
</div>
<br><br><br>
 <br>
    </div>

