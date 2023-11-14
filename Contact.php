<html>
<body>
<h1 align="middle">contact Successful<h1>
<?php
$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());
mysqli_select_db($dbh,'salon') or die(mysqli_error($dbh));
$name=$_REQUEST['name'];
$phonenumber=$_REQUEST['phonenumber'];
$location=$_REQUEST['location'];
$query="insert into contactus values('$name','$phonenumber','$location')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"DATA INSERTED SUCCESFULLY!!";

?>
<a href="Logout.html">logout</a>
</body>
</html>