<?php

include('connection.php');

$uid=$_GET['uid'];


$qry1=$connection->query("UPDATE blood_request SET status='ACCEPTED' WHERE id='$uid';");
echo"<h1> ACCEPTED"
?>
<script>

	//alert(id)
	location.href="viewrequest.php";
	

</script>