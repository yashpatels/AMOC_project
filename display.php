<?php
$con=mysqli_connect("localhost","root","")or
	die("Could not connect.");
mysqli_select_db($con,"admin")or
	die("Could not select database.");
	$sql = "SELECT question, op1, op2, op3, op4 FROM paper ORDER BY RAND() LIMIT 2";
	$result = $con->query($sql);
	echo "<head><script>
var counter=900;
var sec=0;
var xyz=setInterval(action, 1000);
function action(){
	if(counter>0)
	{
		var min=Math.floor(counter/60);
		if(min<10&&sec<10)
		var time='0'+min+' : 0'+sec;
		else if(min<10)
		var time='0'+min+' : '+sec;
		else if(sec<10)
		var time=min+' : 0'+sec;
		else	
		var time=min+' : '+sec;
		document.getElementById('timer').innerHTML=time;
		if(sec==0)
		sec=59;
		else
		sec--;
		counter--;
	}
	else
	{
		window.location.href='result.html';
	}
}
</script></head>
<body style='background-color:rgb(156,205,97)'>
<div style='margin-top:0%;width:100%;height:12%;background-color:black;color:white;text-align:left;'><center><p style='font-size:72px'>EXALYMPICS</p></center></div>
<div <br><br><br><br><br>
<h1 id='timer' style='background-color:black;color:white;text-align:center;margin-left:45%;margin-right:45%;'></h1>	
<div name='testdiv' style='margin-left:50px;margin-right:50px;margin-top:50px;margin-bottom:25px;background-color:white;color:black;'></div>
</body>
";
	$cnt=1;
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<pre><div style='margin-left:50px;margin-right:50px;margin-top:50px;margin-bottom:25px;background-color:white;color:black;font-size:18px;'>"."<br>"." ".$cnt.".  ".$row["question"]."<br>     <input type='radio' name='yash'>A)".$row["op1"]."<br>     <input type='radio' name='yash'>B)".$row["op2"]."<br>     <input type='radio' name='yash'>C)".$row["op3"] ."<br>     <input type='radio' name='yash'>D)".$row["op4"]."<br><br></div></pre>";
		$cnt++;
    }
} else {
    echo "0 results";
}
$con->close();
?>