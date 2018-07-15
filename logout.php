<?php
$con=mysqli_connect("localhost","root","")or
	die("Could not connect to localhost.");
mysqli_select_db($con,"student")or
	die("Could not select database.");
$qry="DELETE FROM `studentlogin`";
if(mysqli_query($con,$qry))
	echo "<script>alert('Successfully logged out.');location='home_new.html';</script>";
else
	echo "<script>alert('Error logging out');</script>";
?>