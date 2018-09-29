<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="miniproject";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn){
		die("Connection failed".mysqli_connect_error());
	}
	session_start();
	$username=$_POST['SUsername'];
	$password=$_POST['SPassword'];
	$sql="SELECT * FROM studlogin WHERE Username='$username'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if($row['Password']==$password)
	{
		$_SESSION['susername']=$username;
		$_SESSION['svalid'] = true;
        $_SESSION['stimeout'] = time();
        
        header('Location:student/home.php');
	}
	else{
		        header('Location:login.html');

	}

?>