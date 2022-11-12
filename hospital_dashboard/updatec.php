<?php

include('connection.php');

$uid=$_GET['uid'];


$qry1=$connection->query("UPDATE blood_request SET status='CANCELED' WHERE id='$uid';");
echo"<h1> CANCELED";
?>
<script>

	//alert(id)
	location.href="viewrequest.php";
	

</script>