<?php
<<<<<<< HEAD
=======
// Xampp localhost config
>>>>>>> 2ad273924f6c1ea2c0b238f61c11c92a048bead0
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";

//apcwebprog config
$servername = "localhost";
$username = "webprogss221";
$password = "=latHen97";
$dbname = "webprogss221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, website, comment, gender FROM nymabini_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " ". $row["email"]. " " . $row["website"]. $row["comment"]. $row["gender"]. "      " . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
