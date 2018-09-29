<?php
 $database="PCMS";//database name 
  $name=$_POST['name'];//this values comes from html file after submitting
  $branch=$_POST['branch'];
  $division=$_POST['division']; 
  $year_admsn=$_POST['year_admsn'];
  $admsn_no=$_POST['admsn_no'];
  $roll_no=$_POST['roll_no'];
  $reg_no=$_POST['reg_no'];
  $adv=$_POST['adv'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $postal_code=$_POST['postal_code'];
  $smob=$_POST['smob'];
  $semail=$_POST['semail'];
  $dateOfBirth = $_POST['year']."-". $_POST['month']."-".$_POST['day'];
  $age=$_POST['age'];
  $father=$_POST['father'];
  $fathocc=$_POST['fathocc'];
  $fmob=$_POST['fmob'];
  $mother=$_POST['mother'];
  $motocc=$_POST['motocc'];
  $femail=$_POST['femail'];
  $mmob=$_POST['mmob'];
  $memail=$_POST['memail'];
  $inc=$_POST['inc'];
  $studentgender=$_POST['studentgender'];
  $studentcategory=$_POST['studentcategory'];
  $studentphy=$_POST['studentphy'];
  $school=$_POST['school'];
  $board=$_POST['board'];
  $scper=$_POST['scper'];
  $mode=$_POST['mode'];
  $sem1=$_POST['sem1'];
  $sem2=$_POST['sem2'];
  $sem3=$_POST['sem3'];
  $sem4=$_POST['sem4'];
  $sem5=$_POST['sem5'];
  $sem6=$_POST['sem6'];
  $sem7=$_POST['sem7'];
  $sem8=$_POST['sem8'];
  $totcgpa=$_POST['totcgpa'];
  $cgpaout=$_POST['cgpaout'];
  $yeargrad=$_POST['yeargrad'];
  
  
  

  
  $con = mysqli_connect("localhost","root" ,"anjuvara","PCMS");
//for wamp 3rd feild is balnk     

if (!$con)     
{     die('Could not connect: ' . mysqli_error($con));
     }  
     mysqli_select_db($con, $database);
      $query = "INSERT INTO stud(StudName,Branch,Division,Year_Admsn,Admsn_No,Roll_No,Reg_No,Staff_Adv,Address,City,State,Postal_Code,Stud_Mob,Stud_Email,DOB,Age,Father,Fthr_Occ,Fthr_Mob,Fthr_Email,Mother,Mthr_Occ,Mthr_Mob,Mthr_Email,Annual_Inc,Stud_Gender,Stud_Category,Stud_Phy,School,Board,School_Per,Mode,Sem1,Sem2,Sem3,Sem4,Sem5,Sem6,Sem7,Sem8,Total_CGPA,CGPA_Out,Year_Grad)VALUES('$name','$branch','$division','$year_admsn','$admsn_no','$roll_no','$reg_no','$adv','$address','$city','$state','$postal_code','$smob','$semail','$dateOfBirth','$age','$father','$fathocc','$fmob','$femail','$mother','$motocc','$mmob','$memail','$inc','$studentgender','$studentcategory','$studentphy','$school','$board','$scper','$mode','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$totcgpa','$cgpaout','$yeargrad')";
      mysqli_query($con,$query); 
      
      mysqli_close($con); 

      ?>