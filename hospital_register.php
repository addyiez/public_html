<?php
	include('connection.php');
	session_start();

	$hname = $_POST['hname'];
	
	$address = $_POST['address'];
	$city= $_POST['city'];
	$email = $_POST['email'];
	$contact= $_POST['contact'];
	$state= $_POST['state'];
	$pass= $_POST['pass'];
	
   $qry=$connection->query("select *  from  hospital where email='$email'");
    $n=mysqli_num_rows($qry);
    $qry=$connection->query("select *  from  recevier where email='$email'");
  $m=mysqli_num_rows($qry);
  $n=$n+$m;
    if($n)
    {
	    echo"<script> alert('Email Already Registered');
		
		location.href='bloodbank_signup.html';
		</script>";
  }
  else{
	$insert = $connection->query("INSERT INTO hospital(name,  address, city,email, contact,state,password) VALUES('$hname', '$address', '$city', '$email','$contact','$state','$pass')");
	echo $connection -> error;
}
	if($insert){
		$_SESSION['success'] = '';
		header('location:index.html');
	}else { ?>
	<div class="alert alert-success" style="background-color: red; color: white;">
    <strong>ERROR!</strong> This alert box could indicate a successful or positive action.
  </div>
	 <?php }
?>