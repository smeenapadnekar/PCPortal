<?php
    include("dbconnect.php");
    session_start();
    $user_check = $_SESSION['susername'];
    $ses_sql = mysqli_query($conn,"SELECT Username from studlogin where username = '$user_check' ");
    $row=mysqli_fetch_assoc($ses_sql);  
  //  $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session = $row['Username'];
    $sql="SELECT Name FROM student WHERE Roll_NO='CSU14147' ";
    $result=mysqli_query($conn,$sql);
    $row1=mysqli_fetch_assoc($result);
    echo $row['Name'];
    echo "string";
                                        ?>