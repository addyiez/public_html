<?php
	include('connection.php');
	session_start();
	//session_unset($_SESSION['username']);
	//session_unset($_SESSION['member_id']);
	session_destroy();
header('location:../index.html');
exit(0);	?>
	