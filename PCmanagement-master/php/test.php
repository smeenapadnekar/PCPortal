<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "miniproject";

   
$conn = new mysqli($servername, $username, $password, $dbname);

   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   


   $query  = "SELECT * FROM event_list "; 
    $result = mysqli_query($conn, $query ) or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result)) {
        $event = $row['name'];
        $description= $row['description'];
        $date= $row['date'];
        
   
    }




   
  
?>




