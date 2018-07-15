<?php
$conn=mysqli_connect("localhost","root","")or 
die("could not connect with localhost");
mysqli_select_db($conn,"student")or
die("could not connect with database");
$qry="SELECT * FROM `studentlogin`";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);
$email=$row["email"];
$qry2="SELECT * FROM `registered` WHERE email='$email'";
$result2=mysqli_query($conn,$qry2);
$row2=mysqli_fetch_assoc($result2);
$email2=$row2["name"];
echo "<style>
.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus {
    background-color: gray;
}


.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}






a{
	color:black;
	text-decoration:none;
}
a:hover, a:active{
	text-decoration:none;
	//font-size:120%;
	color:black;
}
</style>
<script>
function myFunction() {
    document.getElementById('myDropdown').classList.toggle('show');
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName('dropdown-content');
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</head>
<body style='background-color:rgb(156,205,97)'>
<div style='margin-top:0%;width:100%;height:23%;background-color:black;color:white;text-align:left;'><h1 style='font-size:145px'>EXALYMPICS</h1></div>
<div style='position:absolute;top:3%;left:73%;height:13%;width:25%;background-color:black;color:white;font-size:37px;'>DON'T STRESS<BR>DO YOUR BEST<BR>FORGET THE REST</div><br>

<div style='height:30px;font-size:20px;'><a href='change_pass.php' style='float:left;'>CHANGE PASSWORD</a><font style='margin-left:30%;font-size:25px;'>Welcome ".$email2."</font><a href='logout.php' style='float:right;'>LOG OUT</a></div>

<div style='height:300px;margin-left:12%;width:300px;margin-top:6%'><center><font style='font-size:40px;'>EXAMINATION</font><br><br>CLICK HERE<br><br>TO TEST YOURSELF<br><br><button onclick='myFunction()' class='dropbtn' > select TEST</button>
 <div id='myDropdown' class='dropdown-content' >
    <a href='#'>B.Tech_I - F.C.P.</a>
    <a href='#'>B.Tech_II - D.S.</a>
    <a href='#'>B.Tech_II - C.O.</a>
	<a href='#'>B.Tech_II - S.W. Tools</a>
  </div></center></div>
<div style='height:300px;position:absolute;top:43%;left:62%;width:300px;'><center><font style='font-size:40px;'>RESULT</font><br><br>CLICK HERE<BR><br>TO EXAMINE YOUR PERFORMANCE<br><br><button onclick='location.href'#'' class='dropbtn' > see RESULT</button></center></div>
<div style='position:absolute;left:50%;top:35%;height:400px;border-left:1px solid black'></div>
</body>
</html>";
echo "<script>
function preventBack(){window.history.forward();}
    setTimeout('preventBack()', 0);
    window.onunload=function (){null};
</script>";
?>