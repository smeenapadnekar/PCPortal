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

  $age=$_POST['age']; 
  //$studentdob=$_POST['studentdob'];
  $father=$_POST['father'];
  $fathocc=$_POST['fathocc'];
  $fmob=$_POST['fmob'];
  $femail=$_POST['femail'];
  
    $mother=$_POST['mother']; 
  $motocc=$_POST['motocc'];
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
  $yeargrad=$_POST['yeargrad'];*/


  

    
$con = mysqli_connect("localhost","root" ,"anjuvara","PCMS");
//for wamp 3rd feild is balnk     

if (!$con)     
{     die('Could not connect: ' . mysqlI_error($con));
     }     

     mysqli_select_db($con, $database);

     $query = "INSERT INTO stud(StudName,Branch,Division)VALUES('$name','$branch','$division')";

      /*$query = "INSERT INTO student(StudName,Branch,Division,Year_admsn,Admsn_num,Roll_No,Reg_no,Staff_adv,Address,City,State,Postal_Code,StudMob_No,StudEmail,Age,FatherName,FatherOcc,FatherMob,FatherEmail,MotherName,MotherOcc,MotherMob,MotherEmail,AnnualInc,Gender,Category,Phys_challenged,School_Name,Board,Per_school,Mode,Sem1,Sem2,Sem3,Sem4,Sem5,Sem6,Sem7,Sem8,Tot_CGPA,CGPAOut,Grad_year)VALUES ('$name','$branch','$division','$year_admsn','$admsn_no','roll_no','$reg_no','$adv','$address','$city','$state','$postal_code','$smob','$semail','$age','$father',$fathocc','$fmob','$femail','$mother','$motocc','$mmob','$memail','$inc','$studentgender','$studentcategory','$studentphy','$school','$board','$scper','$mode','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$totcgpa','$cgpaout','$yeargrad')"; */
      mysqli_query($con,$query); 
      echo "<script type='text/javascript'>\n"; 
      echo "alert('you are Succesflly registered');\n"; 
      echo "</script>"; 
      mysqli_close($con); 

      ?>