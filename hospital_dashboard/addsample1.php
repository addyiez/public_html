<?php
session_start();
include('connection.php');
$id=$_SESSION['member_id'];

$b=$_GET['b'];
$s=$_GET['s'];
$x='-';
$y='+';
if($s==='P')
	{$b=$b.$y;}
else
{
	$b=$b.$x;
}
$qry=$connection->query("select * from  hospital  where id='$id' ");

$row=mysqli_fetch_array($qry);
$bname=$row["name"];
$address=$row["address"];
$city=$row["city"];
$email=$row["email"];
$contact=$row["contact"];
$state=$row["state"];

$insert=$connection->query("insert into blood_bank(bank_name,address,city,email,contact,state,bgroup)values('$bname','$address','$city','$email','$contact','$state','$b')");
  echo $connection -> error;

echo"<h1>Inserted";



?>
<script>
	location.href="addsample.php"
</script>