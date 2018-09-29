<?php
	//include("dbconnect.php");
	//session_start();
  $var=$_SESSION['susername'];
  $query="SELECT * FROM messages JOIN student where student.Roll_No='$var' AND messages.Recipient1<=student.Cgpa AND messages.Recipient2=student.Branch ORDER BY Date";
	$result = mysqli_query($conn, $query ) or die(mysqli_error($conn));  

    while($row = mysqli_fetch_assoc($result)) {
        $event = $row['Subject'];
        $description= $row['Description'];
        $date= $row['Date'];
        echo " <div class=\"alert alert-block alert-danger\" style=\"background-color: #1E90FF;  \" >  ";
                                                   // echo "    <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\"> ";
                                                       //   echo "  <i class=\"fa fa-times\"></i> ";
                                                     //  echo " </button> ";
                                                        
                                                            $event = $row['Subject'];
                                                            $description= $row['Description'];
                                                            $date= $row['Date'];
                                                         echo $event; echo "\t";
                                                          echo $date; echo "<br>";
                                                          echo $description; echo "<br>";
                                                          
                                                    echo "</div>";
       } 
        
?>