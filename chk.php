<?php

include('connection.php');

$email=$_GET['email'];

$qry=$connection->query("select * from  hospital  where  email='$email' ");

$nm=mysqli_num_rows($qry);

if($nm)
{
	?>
	 <script>alert('sorry u r not allowed')
	 
	 location.href="bloodbank_services.php";
	 
	 </script>

<?php
}
else
{
	  $qry1=$connection->query("select * from recevier where email='$email' ");
	  $nmm=mysqli_num_rows($qry1);
	  if($nmm)
	  {
		   header("location:recevier_login.html");
	  }
	  else
	  {?>
	  	<script>alert('sorry u need to register first')
	 
	  location.href="bloodbank_signup1.html";
	 
	 </script>
	 <?php
	  }
}
?>