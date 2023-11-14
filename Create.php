<html>
<body>
<h1 align="middle">Registration Successful</h1>
<?php
$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());
mysqli_select_db($dbh,'salon') or die(mysqli_error($dbh));
$name=$_REQUEST['name'];
$phone_number=$_REQUEST['phone_number'];
$location=$_REQUEST['location'];
$query="insert into create_account values('$name','$phone_number','$location')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"DATA INSERTED SUCCESFULLY!!";

$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());
mysqli_select_db($dbh,'salon') or die(mysqli_error($dbh));
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$query="insert into create_account1 values('$username','$password')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));

?>
<a href="login.html">login</a>
</body>
</html>