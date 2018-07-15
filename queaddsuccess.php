<?php
$con=mysqli_connect("localhost","root","")or
	die("Could not connect.");
mysqli_select_db($con,"admin")or
	die("Could not select database.");
$sub=$_POST['subject'];
echo $sub;
$que=$_POST['question'];
$opa=$_POST['A'];
$opb=$_POST['B'];
$opc=$_POST['C'];
$opd=$_POST['D'];
$answer=$_POST['ans'];
	$qry="INSERT INTO paper (subject, question, op1, op2, op3, op4, ans)
				VALUES ('$sub' ,'$que', '$opa', '$opb','$opc' ,'$opd', '$answer')";
	if(mysqli_query($con,$qry))
		echo "<script>alert('Registration succesful!');location='que_add.html';</script>";
	else
			die("Could not insert name.");

?>