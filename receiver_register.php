<?php
	include('connection.php');
	session_start();

	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$city= $_POST['city'];
	$email = $_POST['email'];
	$contact= $_POST['contact'];
	$state= $_POST['state'];
	$pass= $_POST['pass'];
	$bgroup= $_POST['bgroup'];

$qry=$connection->query("select *  from  hospital where email='$email'");
    $n=mysqli_num_rows($qry);
    $qry=$connection->query("select *  from  recevier where email='$email'");
  $m=mysqli_num_rows($qry);
  $n=$n+$m;
    if($n)
    {
	    echo"<script> alert('Email Already Registered');
		
		location.href='bloodbank_signup1.html';
		</script>";
  }
  else{
	$insert = $connection->query("INSERT INTO recevier(name, age, address, city,email, contact,state,password,bgroup,user) VALUES('$name','$age', '$address', '$city', '$email','$contact','$state','$pass','$bgroup','recevier')");
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