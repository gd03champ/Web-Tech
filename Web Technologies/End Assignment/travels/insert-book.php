<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => loginsystem
		$conn = mysqli_connect("localhost", "root", "", "loginsystem");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name=$_SESSION['username'];
		$from = $_REQUEST['from'];
		$to = $_REQUEST['to'];

		
		// Performing insert query execution
		// here our table name is feedback
		$sql = "INSERT INTO booking VALUES ('$name','$from','$to')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your ticket has been booked successfully under your account!</h3>";

			echo nl2br("\n$name\n $from\n $to\n ");
            echo "<center><a href='http://localhost/travels/'><p><img width='10%' src='img/home.png'></p></a></center>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
