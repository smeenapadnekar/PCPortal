<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="miniproject";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn){
		die("Connection failed".mysqli_connect_error());
	}
	$username=$_POST['Rollno'];
	$name=$_POST['Name'];
	$class=$_POST['Class'];
	$email=$_POST['inputEmail'];
	$Password=$_POST['inputPassword'];
	

	$sql="INSERT INTO tempstud(Rollno,Name,Class,Email,Password) VALUES('$username','$name','$class','$email','$Password')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header('Location: ../Login/login.html');
	}
	else{
		echo "unsccessful";
	}
?>