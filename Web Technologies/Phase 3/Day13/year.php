<?php
$mysqli = new mysqli('127.0.0.1','root','root','bit','3306');
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT year, hostel, mess, holiday
FROM students WHERE year = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($year, $hostel, $mess, $holiday);
$stmt->fetch();
$stmt->close();

echo "<table>";

echo "<tr><th>Year</th>";
echo "<td>" . $year . "</td></tr>";
echo "<tr><th>Hostek</th>";
echo "<td>" . $hostel . "</td></tr>";
echo "<tr><th>Mess</th>";
echo "<td>" . $mess . "</td></tr>";
echo "<tr><th>Holiday</th>";
echo "<td>" . $holiday . "</td></tr>";

echo "</table>";
?>