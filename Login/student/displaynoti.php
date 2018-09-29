<?php
	include("dbconnect.php");
  $user=$_SESSION['susername'];

	$query="SELECT * FROM event_list JOIN students where student.Cgpa=event_list.recipients_gpa AND student.Branch=event_list.recipients_branch ORDER BY date ";
	
	$result = mysqli_query($conn, $query ) or die(mysqli_error($conn));  
	 while($row = mysqli_fetch_assoc($result)) {
      
        echo " <div class=\"alert alert-block alert-danger\" style=\"background-color: #1E90FF;  \" >  ";
                                                   // echo "    <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\"> ";
                                                       //   echo "  <i class=\"fa fa-times\"></i> ";
                                                     //  echo " </button> ";
                                                          
                                                            $event = $row['name'];
                                                            $description= $row['description'];
                                                            $date= $row['date'];
                                                          //  $link=$row['Link'];
                                                         echo $event; echo "\t";
                                                          echo str_repeat('&nbsp', 100).$date; echo "<br>";
                                                          echo $description; echo "<br>";
                                                      //    echo  $link;echo "<br>";
                                                          
                                                    echo "</div>";
       } 

?>