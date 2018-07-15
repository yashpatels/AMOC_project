<?php
$con=mysqli_connect("localhost","root","")or
	die("Could not connect to localhost.");
mysqli_select_db($con,"student")or
	die("Could Not Connect to Host.");
$qry="SELECT * FROM `studentlogin`";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);
if($row["email"]==NULL)
	header('Location: home_new.html');
	
mysqli_select_db($con,"admin")or
	die("Could not connect to database.");


$answers=array();
$cnt=1;
$marks=0;
echo "<table><tr><th>Q.No.</th><th>Your Answer</th></tr>";
while($cnt<3)
{
	
	if(isset($_POST[$cnt]))
	{
	$answers[$cnt]=$_POST[$cnt];
	}
	else
	{
		$answers[$cnt]=NULL;
	}
	echo "<tr><td>".$cnt."</td><td>".$answers[$cnt]."</td></tr>";
	$qry="SELECT * FROM `anskey` WHERE number='$cnt'";
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_assoc($result);
	if($row["answer"]==$answers[$cnt])
	{
		$marks++;
	}
	$cnt++;
}
$cnt=1;
while($cnt<3)
{
	$ans=$answers[$cnt];
	$qry="UPDATE `anskey` SET `student_answer`='$ans' WHERE number='$cnt'";
	mysqli_query($con,$qry);
	$cnt++;
}
$con=mysqli_connect("localhost","root","")or
	die("Could not connect to localhost.");
mysqli_select_db($con,"student")or
	die("Could Not Connect to Host.");
	$qry="SELECT * FROM `studentlogin`";
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_assoc($result);
	$email=$row["email"];
	$qry="SELECT * FROM `registered` WHERE email='$email'";
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_assoc($result);
	$roll=$row["roll"];
	$name=$row["name"];
	$year=$row["year"];
	//$qry="UPDATE `tempresult` SET roll='$roll', name='$name', year='$year', score='$marks' WHERE email=$email";
	$qry="SELECT * FROM `tempresult`";
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_assoc($result);
	$email=$row["email"];
	$subject=$row["subject"];
	//echo $marks;
	$qry="INSERT INTO `result`(`roll`,`name`,`year`,`email`,`subject`,`score`) VALUES('$roll','$name','$year','$email','$subject','$marks')";
	mysqli_query($con,$qry);
	$qry="DELETE FROM `tempresult`";
	mysqli_query($con,$qry);
	mysqli_select_db($con,"admin")or
	die("Could Not Connect to Host.");
	$qry="DELETE FROM `anskey`";
	mysqli_query($con,$qry);
?>















