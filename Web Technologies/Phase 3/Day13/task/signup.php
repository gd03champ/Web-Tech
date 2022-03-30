<?php

$con = mysqli_connect("127.0.0.1","root","root","GDInd","3306");

//$mysqli = new mysqli("127.0.0.1", "root", "root", "GDInd", "3306");

$id = $_POST['A1'];
$name = $_POST['A2'];
$contactNum = $_POST['A3'];
$address = $_POST['A4'];
$city = $_POST['A5'];
$position = $_POST['A6'];
$country = $_POST['A7'];

$sql = "INSERT INTO `employees` (`CustomerID`, `CompanyName`, `ContactNum`, `Address`, `City`, `Position`, `Country`) VALUES ('$id', '$name', '$contactNum', '$address', '$city','$position','$country');";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>