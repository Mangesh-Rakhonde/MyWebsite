<?php
$servername = "localhost";
$username = "root";
$password = "sql123";
$dbname = "edu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="INSERT INTO result(Name,Score)
VALUES ('$_POST[FirstName]','$_POST[Score]')";

if ($conn->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
?>
