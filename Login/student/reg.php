<?php
	
	include("dbconnect.php");
	session_start();
	
	$id=$_SESSION['var'];
	$sql="INSERT INTO registered(EventID,Username) VALUES('$id','CSU1447')";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>