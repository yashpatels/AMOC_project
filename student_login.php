<?php
$conn=mysqli_connect("localhost","root","") or
die("could not connect to localhost.");
mysqli_select_db($conn,"student") or
die("could not select database ");
$email=$_POST['username'];
$pass=$_POST['password'];
$qry="SELECT `email` FROM `registered` WHERE email='$email'";
$result=mysqli_query($conn,$qry);
$rows=mysqli_num_rows($result);
if($rows==1)
{
	$row=mysqli_fetch_assoc($result);
	$qry2="SELECT * from `registered` WHERE email='$email'";
	$result2=mysqli_query($conn,$qry2);
	$row2=mysqli_fetch_assoc($result2);
	if($pass==$row2["password"])
	{
		$qry3="INSERT INTO `studentlogin`(`email`) VALUES('$email')";
		if(mysqli_query($conn,$qry3));
		else 
			die("could not insert email in login database");
		echo "<script>location='student_home.php';</script>";
	}
	else
		{
			echo "<script>alert('INCORRECT PASSWORD');location='home_new.html';</script>";
		}
}
else
{
	echo "<script>alert('INCORRECT USERNAME');location='home_new.html';</script>";
}	


?>