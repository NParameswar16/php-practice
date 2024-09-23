<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="practice1";

if(isset($_POST['search'])) {
    $f1 = $_POST['search'];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, email, age FROM emp3 where name ='".$f1."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: ". $row["email"]. " - Age: ". $row["age"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
