<?php

include('config.php');
?>

<html>
<head>
<style>
img{
	position: fixed;
	width:150px;
	margin-top: -25px;
}
h1{
	margin-top: -27px;
	margin-left: -8px;
	margin-right: -8px;
	font-family: sans-serif;
	background-color: #424447;
	color: #fff;
	padding: 20px;
}
#wrapper
{
background-color: #424447;
	box-shadow: 3px 3px 5px 5px #999; 
margin: 0 auto;
width: 800px;
margin-top: 70px;
color: #fff;
font-family: sans-serif;
border-radius: 15px;
border-style: solid ;
border-color: grey;
}
#form{
	margin: 30px;
}

.entries
{

	margin-left: 0px;
	font-size: 1em;
}

.inp
{

	margin-left: 0px;
	border-radius: 5px;
	height: 5.5%;
	width: 75%;
}
.inp:focus
{
border:1px solid #00ffff;

}
.button
{

	margin-left: 0px;
	border-radius: 4px;
	width: 100px;
	height: 30px;
}

#not
{margin-top: 20px;
margin-left: 130px;
	border-radius: 4px;
	width: 100px;
	height: 30px;

}
#student
{
margin-left: 180px;
	border-radius: 10px;
	width: 100px;
	height: 30px;
	margin-top: -20px;
	margin-bottom: 50px;
}
#status
{

margin-left:300px;
margin-top:-175px;
width:30px;
height:30px;
border:1px solid white;

}

#logout
{

	margin-left: 100px;
}
#imagefetch
{

border-color: black;
width: 150px;
height: 150px;
border-style: solid;
margin-left: 600px;
margin-top: 100px;
position: absolute;
}
</style>	
	

	</head>
	
    <body>
    	<br>
    	<img src="white vit.png"/>
    	<h1 align="center">VIT SECURITY</h1>


<div id="wrapper"> 		
<div id ="imagefetch">




	</div>

	<form id="form" name="form1" onsubmit="return validate();" action="hostel.php" method="post">
	
	<p class = "entries"><br> Name </p> <input type ="text" name="name" class="inp" placeholder="Name"  id="input1" maxlength="20">
	<p class = "entries"> Registration Number </p> <input type ="text" class="inp" name="reg" placeholder="Registration Number"  id="input2">
	<p class = "entries"><br> Year </p> <input type ="text" name="year" class="inp" placeholder="Year"  id="input1" maxlength="3">
	<p class = "entries"> Date of Birth </p> <input type ="date" class="inp" name="dob" placeholder="Date of Birth"  id="input2">
	<p class = "entries"><br> Block</p> <input type ="text" name="block" class="inp" placeholder="Block"  id="input1" maxlength="20">
	<p class = "entries"> Room </p> <input type ="text" class="inp" name="room" placeholder="Room"  id="input2">
	<p class = "entries"><br> Parent ID </p> <input type ="text" name="parentid" class="inp" placeholder="Parent ID"  id="input1" maxlength="30">
	<p class = "entries"> Proctor Name </p> <input type ="text" class="inp" name="proctor" placeholder="Proctor Name"  id="input2">
	<p class = "entries"><br> Proctor ID</p> <input type ="text" name="proctorid" class="inp" placeholder="proctor Mail ID"  id="input1" maxlength="20">
	<p class = "entries"> Phone </p> <input type ="text" class="inp" name="Phone" placeholder="Phone"  id="input2">
	
	
	<br>
	<br>
	<br>
	<input type="submit" class="button" id="logout">
</form>


<?php
@$a = $_POST['name'];
@$b = $_POST['reg'];
@$c = $_POST['year'];
@$d = $_POST['dob'];
@$e = $_POST['block'];
@$f = $_POST['room'];
@$g = $_POST['parentid'];
@$h = $_POST['proctor'];
@$i = $_POST['proctorid'];
@$j = $_POST['Phone'];

if(isset($a) && isset($b) && isset($c) && isset($d) && isset($e) && isset($f) && isset($g) && isset($h) && isset($i) && isset($j))
{

mysql_connect("localhost", "root", "");
mysql_select_db("security2");

$res = mysql_query("INSERT INTO `userdetails`(`name`, `reg`, `year`, `dob`, `block`, `room`, `parentid`, `procname`, `procid`, `phone`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
if($res)
echo "SUCCESS";

else
echo " HELL"; 
}

?>
	

	</div>
	</body>

	
	</html>