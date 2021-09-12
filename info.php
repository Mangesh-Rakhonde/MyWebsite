
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

$sql ="INSERT INTO dataform(FirstName,LastName,Mobile,Email,Age,Quilification)
 VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[Mobileno]','$_POST[Email]','$_POST[age]','$_POST[Qualification]')";
//VALUES('Harish','rakhonde',24,'MCA',7676666696,'fgmmcm')";
if ($conn->query($sql) != TRUE) {
 echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();
?>


