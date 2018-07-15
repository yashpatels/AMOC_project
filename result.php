<?php
$con=mysqli_connect("localhost","root","")or
	die("Could not connect.");
mysqli_select_db($con,"student")or
	die("Could not select database.");
$sql="SELECT * FROM `result`";
$result=mysqli_query($con,$sql);
echo "<html>
<body style='background-color:rgb(156,205,97)'>
<div style='margin-top:0%;width:100%;height:23%;background-color:black;color:white;text-align:left;'><h1 style='font-size:145px'>EXALYMPICS</h1></div>
<div style='position:absolute;top:3%;left:73%;height:13%;width:25%;background-color:black;color:white;font-size:37px;'>DON'T STRESS<BR>DO YOUR BEST<BR>FORGET THE REST</div><br><br><br><br><br>";
if(mysqli_num_rows($result)>0)
{
	echo "<style>table,td,th{border:1px solid black;}</style>";
	echo "<table><tr><th>Roll No.</th><th>Name</th><th>Year</th><th>Subject</th><th>Score</th></tr>";
	while($row=mysqli_fetch_assoc($result))
		echo "<tr><td>".$row["roll"]."</td><td>".$row["name"]."</td><td>".$row["year"]."</td><td>".$row["subject"]."</td><td>".$row["score"]."</td></tr>";
	echo "</table>";
}
echo "</body></html>";
	
?>