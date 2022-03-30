<?php

if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}?>
<html>

<style>
body {
  font-family: 'Courier New', monospace;
  background-image: url('bg.jpg');
}
</style>

<body><center>

<div>
<form method="post" action="">
	<hr><br>
<h1>CALCULATOR</h1>
<br><hr>
<br><b>
Number1:<input name="n1" value="">
<br><br>
Number2:<input name="n2" value="">
<br><br><br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
</b></form>
	</div>
	</center></body>
</html>