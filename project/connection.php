<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "anjuvara";  
       $databasename="PCMS"
       $connection = mysqli_connect ($servername , $username , $password, $databasename) ;
       if(!connection)
       {
       	die("Connection failed: " .mysqli_connect_error());
       }
       echo "Connected successfully!!! <br>";

       $query = "INSERT INTO student(StudName,Age)VALUES ('$name','$age')";
        
       
?>   