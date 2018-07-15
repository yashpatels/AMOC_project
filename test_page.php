<html>
<head>
<style>
</style>
<script>
var counter=900;
var sec=0;
var xyz=setInterval(action, 1000);
function action(){
	if(counter>0)
	{
		var min=Math.floor(counter/60);
		if(min<10&&sec<10)
		var time="0"+min+" : 0"+sec;
		else if(min<10)
		var time="0"+min+" : "+sec;
		else if(sec<10)
		var time=min+" : 0"+sec;
		else	
		var time=min+" : "+sec;
		document.getElementById("timer").innerHTML=time;
		if(sec==0)
		sec=59;
		else
		sec--;
		counter--;
	}
	else
	{
		window.location.href="result.html";
	}
}
</script>
</head>
<body style="background-color:rgb(156,205,97)">
<div style="margin-top:0%;width:100%;height:23%;background-color:black;color:white;text-align:left;"><h1 style="font-size:145px">EXALYMPICS</h1></div>
<div style="position:absolute;top:3%;left:73%;height:13%;width:25%;background-color:black;color:white;font-size:37px;">DON'T STRESS<BR>DO YOUR BEST<BR>FORGET THE REST</div><br><br><br><br><br>
<h1 id="timer" style="background-color:yellow;color:red;text-align:center;margin-left:45%;margin-right:45%;"></h1>
<div name="testdiv" style="margin-left:50px;margin-right:50px;margin-top:50px;margin-bottom:25px;background-color:white;color:black;"><b><p id="1">1. </p><br><br><p id="2">2. </p><br><br><p id="3">3. </p><br><br><p id="4">4. </p><br><br><p id="5">5. </p><br><br><p id="6">6. </p><br><br><p id="7">7. </p><br><br><p id="8">8. </p><br><br><p id="9">9. </p><br><br><p id="10">10. </p><br><br><p id="11">11. </p><br><br><p id="12">12. </p><br><br><p id="13">13. </p><br><br><p id="14">14. </p><br><br><p id="15">15. </p><br><br></b></div>
</body>
</html>