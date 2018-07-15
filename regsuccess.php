<?php
$con=mysqli_connect("localhost","root","")or
	die("Could not connect.");
mysqli_select_db($con,"student")or
	die("Could not select database.");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cnfpass=$_POST['cnfpass'];
$mobile=$_POST['mobile'];
$year=$_POST['year'];
if($pass!=$cnfpass)
{
	echo "<script> alert('The \'PASSWORD\' and \'CONFIRM PASSWORD\' fields must match');location='registration.html';</script>";
}
else
{
	$qry="INSERT INTO `registered`(`name`,`email`,`password`,`mobile`,`year`) VALUES('$name','$email','$pass','$mobile','$year')";
	if(mysqli_query($con,$qry))
		echo "Registration succesful!<br>";
	else
			die("Could not insert name.");
}
?>