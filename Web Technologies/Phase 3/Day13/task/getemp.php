<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "GDInd", "3306");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT CustomerID, CompanyName, ContactNum, Address, City, Position, Country
FROM employees WHERE CustomerID = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $cnum, $adr, $city, $ption, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr><th>CustomerID</th>";
echo "<td>" . $cid . "</td></tr>";
echo "<tr><th>CompanyName</th>";
echo "<td>" . $cname . "</td></tr>";
echo "<tr><th>ContactNumber</th>";
echo "<td>" . $cnum . "</td></tr>";
echo "<tr><th>Address</th>";
echo "<td>" . $adr . "</td></tr>";
echo "<tr><th>City</th>";
echo "<td>" . $city . "</td></tr>";
echo "<tr><th>Position</th>";
echo "<td>" . $ption . "</td></tr>";
echo "<tr><th>Country</th>";
echo "<td>" . $country . "</td></tr>";
echo "</table>";
?>