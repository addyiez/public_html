<?php

include('connection.php');

$id=$_GET['id'];
$hname=$_GET['bname'];
$qry=$connection->query("select * from  recevier where id='$id'");

$row=mysqli_fetch_array($qry);
$name=$row["name"];

$email=$row["email"];
$contact=$row["contact"];
$bgroup=$row["bgroup"];
$address=$row["address"];
$hemail=$_GET['hemail'];
$qry1=$connection->query("insert into blood_request(name,email,contact,bgroup,hname,address,hemail) values('$name','$email','$contact','$bgroup','$hname','$address','$hemail')");

echo '<script>alert("Request  sent")</script>';

?>
<script>


	location.href="bloodbank_services.php";
	

</script>