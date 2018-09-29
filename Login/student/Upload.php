<?php
session_start();
$var=$_SESSION['susername'];
//echo $var;
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
	{
		$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
include("dbconnect.php");
$sql = "DELETE FROM resume WHERE Userid='$var'";
mysqli_query($conn,$sql) or die('failed');
$query = "INSERT INTO resume (Userid,CV) VALUES ('$var', '$content')";

mysqli_query($conn,$query) or die('Error, query failed'); 
header('Location: home.php');
//echo "<br>File $fileName uploaded<br>";
} 
?>