<?php

session_start();
?>
<link rel="stylesheet" href="bloodbank.css">
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width:100%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.backgroundBody  {
    float:left;
    width:1200px;
    height:100%;
    margin-top:60px;
    background-color :FFE4C4;
    background-image: url("file70kc18dlox411gg69752-1188005359-1560449918.jpeg");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}
</style>


<div style="height:70px;border:3px solid red;border-top:5px solid red;">

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
<b>WELCOME HOSPITAL <?php echo $_SESSION['username']; ?> </b>
<hr>
</div>



</div>

<div  style="width:200px;height:100%;background:red;color:blue;padding-top:90px;float:left;">


 <a  href="addsample.php?id=<?php echo $_SESSION['member_id'];?>">ADD Sample </a><br><br>
 
 <a  href="viewrequest.php">View  Sample Request </a>
 </div>
 
 <div class="backgroundBody">
     
 
<div class="dropdown">
  <span style="margin-left:500px; font-size: 20px;"> Add blood Sample button</span>
  <div class="dropdown-content">
 By going to this page you can make a blood type available or unavailable to your Hospital/Blood Bank. Access to this page is restricted to you only.

</div> 
</div>
<br><br><br><br>
 
<br>


<div class="dropdown">
  <span style="margin-left:500px; font-size: 20px;"> All requests Button </span>
  <div class="dropdown-content">
 Hospitals should be able to see the list of all the receivers who have requested a particular blood group from its blood bank and can accept or cancel a reqest.If by mistake or any other reason a hospital have accepted or canceled a request they can again modify it by clicking Edit Status buton .By Default status will be pending.

</div>
</div>
<br><br><br>
<br><br><br>
 <br>
 <div class="dropdown">
  <span style="margin-left:500px; font-size: 20px;"> Accepted Requests Button</span>
  <div class="dropdown-content">
 To view all the  blood requests hospital can Accepted by itself.

</div> 
</div>
<br><br><br><br>
     </div>
</div>