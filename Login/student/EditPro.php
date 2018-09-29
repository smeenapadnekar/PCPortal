<?php
	include("dbconnect.php");
	
	$Name=$_POST["Name"];
	$Class=$_POST["Class"];
	$Branch=$_POST["Branch"];
	$Year_Adm='2014';//$_POST["YearAdm"];
	$Adm_NO=$_POST["Admno"];
	$Roll_No=$_POST["Rollno"];
	$Reg_No=$_POST["Regno"];
	$Gender=$_POST["Gender"];
	$DOB=$_POST["DOB"];
	$Email=$_POST["Email"];
	$Contact_No	=$_POST["Mob"];
	$Address=$_POST["Address"];
	$Father=$_POST["Father"];
	$Fthr_Contact=$_POST["FatherContact"];
	$Fthr_Email=$_POST["FatherEmail"];
	$Mother=$_POST["Mother"];
	$Mthr_Contact=$_POST["MotherContact"];
	$Mthr_Email=$_POST["MotherEmail"];
	$Gaurdian=$_POST["Gaurdian"];
	$G_Contact=$_POST["GContact"];
	$Mark10=$_POST["Class10"];
	$Year10=$_POST["Year10"];
	$Board10=$_POST["Board10"];
	$Mark12=$_POST["Class12"];
	$Year12=$_POST["Year12"];
	$Board12=$_POST["Board12"];
	$Sem2=$_POST["Sem2"];
	$Sem3=$_POST["Sem3"];
	$Sem4=$_POST["Sem4"];
	$Sem5=$_POST["Sem5"];
	$Sem6=$_POST["Sem6"];
	$Sem7=$_POST["Sem7"];
	$Sem8=$_POST["Sem8"];
	$Cgpa=$Sem2;
	if($Sem3!=0){
		$Cgpa=(($Sem2*2)+$Sem3)/3;

	}
	elseif ($Sem4!=0) {
		$Cgpa=(($Sem2*2)+$Sem3+$Sem4)/4;

	}
	elseif ($Sem5!=0) {
		$Cgpa=(($Sem2*2)+$Sem3+$Sem4+$Sem5)/5;

	}
	elseif ($Sem6!=0) {
		$Cgpa=(($Sem2*2)+$Sem3+$Sem4+$Sem5+$Sem6)/6;
	}
	elseif ($Sem6!=0) {
		$Cgpa=(($Sem2*2)+$Sem3+$Sem4+$Sem5+$Sem6+$Sem7)/7;
	}
	elseif ($Sem8!=0) {
		$Cgpa=(($Sem2*2)+$Sem3+$Sem4+$Sem5+$Sem6+$Sem7+$Sem8)/8;
	}
	$Diploma=$_POST["Diploma"];
	$University=$_POST["DiplomaMark"];
	$GateScore=$_POST["GATE"];
	$Year_Pass=$_POST["YearGra"];
	$query="INSERT IGNORE INTO student (Name, Class, Branch, Year_Adm, Adm_No, Roll_No, Reg_No, Gender, DOB, Age, Email, Contact_no, Address, Father, Fthr_Contact, Fthr_email, Mother, Mthr_Contact, Mthr_email, Gaurdian, G_contact, Mark10, Year10, Board10, Mark12, Year12, Board12, Sem1_2, Sem3, Sem4, Sem5, Sem6, Sem7, Sem8, Cgpa, Diploma, University, Gate_score, Year_pass)	 VALUES ('$Name', '$Class', '$Branch', '$Year_Adm', '$Adm_NO', '$Roll_No', '$Reg_No', '$Gender', '2017-03-08', '20', '$Email', '$Contact_No', '$Address', '$Father', '$Fthr_Contact', '$Fthr_Email', '$Mother', '$Mthr_Contact', 'Mthr_Email', '$Gaurdian', '$G_Contact', '$Mark10', '$Year10', '$Board10', '$Mark12', '$Year12', '$Board12', '$Sem2', '$Sem3', '$Sem4', '$Sem5', '$Sem6','$Sem7','$Sem8', '$Cgpa', '$Diploma', '$University', '$GateScore', '$Year_Pass');";
	$result = mysqli_query($conn, $query ) or die(mysqli_error($conn)); 
	header('Location: profile.php')
?>