<?php

session_start();
?>
<div  style="height:120px;background:lightgray;color:white;font-size:30px;text-align:center;padding-top:40px"><div style="float:left">welcome  to Recevier</div>

<div  style="float:right"><?php  echo $_SESSION['username'];?><a href="logout.php">logout</a></div>

</div>

<h1  align=center> welcome  to  Hopital</h1>

 <a  href="bloodbank_services.php">view </a><br><br>
 
 