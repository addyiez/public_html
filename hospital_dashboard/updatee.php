<?php

include('connection.php');

$uid=$_GET['uid'];


$qry1=$connection->query("UPDATE blood_request SET status='PENDING' WHERE id='$uid';");
echo"<h1> NOW YOU CAN EDIT STATUS";
?>
<script>

	//alert(id)
	location.href="viewrequest.php";
	

</script>