<html> <head> <title> View Members </title> </head>
<body style="background-color:darkgray">
<div style="position:absolute; top: 50px; left: 50px;
font-size:8pt; font-family: 'Trebuchet MS';">
<center>
<h1>
<?php
$con=mysqli_connect("localhost","root","","auth") or die(mysql_error());

echo "Memebers details";
echo "<table border='3'><tr><th>id</th><th>idamemno</th><th>Name</th><th>email</th><th>Membershiptype</th></tr>";
$sel="select * from members";
$i=0;
if($qh=mysqli_query($con,$sel)) {
while($row=mysqli_fetch_row($qh)) {
echo "<tr> <td> <b>", $row[0]," </b> </td> <td> <b>", $row[1]," </b> </td> <td> <b>",$row[2]," </b> </td> <td> <b>",$row[3]," </b> </td> <td> <b>",$row[4],"
</b> </td> </tr>";
$i=$i+1;
}
mysqli_free_result($qh);
echo "</table>";
   /* echo"<a href="add.php">".back."</a>";*/
$count=$i;
}

?>
</h1><br>
    <a href="add.php" style="padding:5%;background-color:black;border-radius:20%;color:white;text-decorate:none;">back</a>
</center>
</div>
</body>
</html>