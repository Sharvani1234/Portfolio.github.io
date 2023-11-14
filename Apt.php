<html>
<body>
<h1 align="middle">appointment Successful<h1>

<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'salon') or die (mysqli_error($dbh));
$name=$_REQUEST['name'];
$emailid=$_REQUEST['emailid'];
$number=$_REQUEST['number'];
$aptdate=$_REQUEST['aptdate'];
$apttime=$_REQUEST['apttime'];
$services=$_REQUEST['services'];
$query="insert into book_appointments values('$name','$emailid','$number','$aptdate','$apttime','$services')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo"DATA INSERTED SUCCESSFULLY!!";
?>
<a href="services.html">services</a>
</body>
</html>

