<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";


$name = $_POST["event_name"];
$description = $_POST["event_description"];
$date = $_POST["event_date"]; 
$recepient =$_POST["select_GPA"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO add_event (name, description, date, recipients)
VALUES ('$name', '$description', '$date', '$recepient')";

if ($conn->query($sql) === TRUE) {
    echo "EVENT CREATED SUCCESSFULLY";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>