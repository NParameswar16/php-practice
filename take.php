<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="practice1";

$f1=$_POST['f1'];
print $f1 ."<br>";
$f2=$_POST['f2'];
print $f2 ."<br>";
$f3=$_POST['f3'];
print $f3;
$f4=$_POST['f4'];
print $f4;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "connected successfully" ."<br>";
{
$sql = "INSERT INTO emp3 (name, email, age,gender)
VALUES ('$f1', '$f2', '$f3','$f4')";


  echo "New record created successfully";
} 

$conn->close();



?>