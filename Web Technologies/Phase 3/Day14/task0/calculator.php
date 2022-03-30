<html>

<style>
body {
  font-family: 'Courier New', monospace;
  background-image: url('bg.jpg');
  border:1px solid blue;
  text-align:center;
}
</style>

    <body>
        <h1>STUDENT RANKING</h1><br>
        <form action="" method="post">
            <center>
                <table border=0>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Physics Marks
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Chemistry Marks
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Math Marks
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
if(isset($_POST['s']))
{
    $a=$_POST['t1']; 
    $a1=$_POST['t2']; 
    $a2=$_POST['t3']; 
    $a3=$_POST['t4']; 
    $sum=$a1+$a2+$a3; 
    $avg=$sum/3;
    if($avg>=0&&$avg<=50)
        $grade="Fail";
    if($avg>50&&$avg<=70)
        $grade="C";
    if($avg>70&&$avg<=80)
        $grade="B";
    if($avg>80&&$avg<=90)
        $grade="A";
    if($avg>90)
        $grade="E";
    echo "<br>";
    echo "<font size=4><center>Student is:-".$a."</center><br>"; 
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}
            ?>
        </form>
    </body>
</html>