<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="miniproject";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn){
		die("Connection failed".mysqli_connect_error());
	}
	ob_start();
	session_start();
	$username=$_POST['SUsername'];
	$password=$_POST['SPassword'];
	$sql="SELECT * FROM pclogin WHERE Username='$Pusername'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if($row['PCPassword']==$password)
	{
		$_SESSION['pusername']=$username;
		$_SESSION['pvalid'] = true;
        $_SESSION['ptimeout'] = time();
        header('Location:Director-free/index.php');
	}

?>