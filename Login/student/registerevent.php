<?php
    include("dbconnect.php");
    $var=$_SESSION['susername'];

    $sql="SELECT * FROM registration  ";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   /* echo "
    <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr>
    <td width=25>Ime:</td>
    <td width=25>Prezime:</td>
    <td width=25>Grad:</td>
<td width=25>Drzava:</td>
<td width=25>Obavijesti:</td>
<td width=50>Tekst:</td>
<td width=25>Action:</td>
 
</tr>";*/
 
 
    echo '<form action="reg.php" method="POST">';  
    $i=0;
    while(($row=mysqli_fetch_assoc($result))>0)
    {
        echo " <div class=\"alert alert-block alert-danger\" style=\"background-color: #87cefa;  \" >  ";
        $var=$row['EventID'];
        $id=$var;//$row['EventID'];

      //  echo "<tr>"; 
        echo "<br><b>".$row['EventID']."</b>".str_repeat('&nbsp', 250).$row['Date'];
        echo "<br><b>".$row['ESubject']."</b><br>";
        echo str_repeat('&nbsp', 25).$row['EDescription'];
        echo "<br>Link : <b>".$row['Link']."</b><br>".str_repeat('&nbsp', 250);
        echo  "<td>" . " <input type='submit' id= '$id' . ' value='Register' >" .  "</td>";
        //echo "</td";
                                     
    }
?>

