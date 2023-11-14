<html>
<body>
<h1 align="middle">service Successful<h1>
<?php
$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());
mysqli_select_db($dbh,'salon') or die(mysqli_error($dbh));
$id=$_REQUEST['id'];
$servicename=$_REQUEST['servicename'];
$cost=$_REQUEST['cost'];
$creationdate=$_REQUEST['creationdate'];
$query="insert into ourservices values('$id','$servicename','$cost','$creationdate')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"DATA INSERTED SUCCESFULLY!!";
?>
<a href="contact.html">contact</a>
</body>
</html>