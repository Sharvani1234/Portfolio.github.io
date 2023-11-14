<html>
<body>
<h1 align="middle">Login Successful<h1>
<?php

$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'salon') or die (mysqli_error($dbh));
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$query="insert into user_pass values('$username','$password')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo"DATA INSERTED SUCCESSFULLY!!";

?>
<a href="home.html">home </a>
</body>
</html>