<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - From: " . $row["from"]. "To" . $row["to"]. "<br>";
  }
} else {
  echo "No bookings found";
}
$conn->close();
?>