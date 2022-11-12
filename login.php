<?php
	include('connection.php');
	session_start();

	$email= $_POST['email'];
	$password = $_POST['pass'];

	$login = $connection->query("SELECT * FROM hospital WHERE email='$email' AND password='$password'");

	$fetch = $login->fetch_array();
	if($login->num_rows == 1){
		if($fetch){
			$_SESSION['member_id'] = $fetch['id'];
			$_SESSION['username'] = $fetch['name'];
			$_SESSION['email'] = $fetch['email'];
			header('location:hospital_dasboard/dashboard.php');

		
	}else {
		$_SESSION['error'] = '';
	}
	}
?>