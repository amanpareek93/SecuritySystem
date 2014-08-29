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
width: 400px;
margin-top: 70px;
height: 450px;
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
	font-size: 1.2em;
}

.inp
{

	margin-left: 0px;
	border-radius: 5px;
	height: 7%;
	width: 95%;
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
</style>	
	

	</head>
	
    <body>
    	<br>
    	<img src="white vit.png"/>
    	<h1 align="center">Outgoing Entries</h1>

<button id="button" onclick = "auto()"> SCAN 1</button>
<button id="button" onclick = "auto2()"> SCAN 2</button>
<button id="button" onclick = "auto3()"> SCAN 3</button>

<div id="wrapper"> 		
	<form id="form" name="form1" onsubmit="return validate();" action="signup_ac2.php" method="post">
	
	<p class = "entries"><br> Name </p> <input type ="text" name="name" class="inp" placeholder="Name"  id="input1" maxlength="20">
	<p class = "entries"> Registration Number </p> <input type ="text" class="inp" name="reg" placeholder="Registration Number"  id="input2">
	
	
	<br>
	<br>
	<br>
	<input type="submit" class="button" id="logout">
</form>
<script type="text/javascript">
function auto()
{
var a = document.getElementById('input1');
a.value="Deepanker Saxena";

var b = document.getElementById('input2');
b.value="11BIT0002";

}
function auto2()
{
var a = document.getElementById('input1');
a.value="Aman Pareek";

var b = document.getElementById('input2');
b.value="11BIT0148";

}
function auto3()
{
var a = document.getElementById('input1');
a.value="Vaibhav Tuteja";

var b = document.getElementById('input2');
b.value="11BIT0118";

}

</script>

<form action="details.php" >
	<p style = "margin-left:15px; padding-top: 10px;"> DETAILS OF STUDENTS OUT OF THE CAMPUS </p>
<input type="submit" id="not" value="Details">
</form>

<?php
// table name 
date_default_timezone_set("Asia/Kolkata");
$time= date('l jS \of F Y h:i:s A');

if(isset($_POST['name'])&&isset($_POST['reg']))
{
// values sent from form 
$name=$_POST['name'];
$reg=$_POST['reg'];


// Insert data into database 

$reg2 = strtoupper($reg);

@$sql="INSERT INTO temp_members_db VALUES('$name','$reg2','$time')";
$result=mysql_query($sql);
$sql2="select * from main_db where reg='$reg' and name='$name'";
$result2=mysql_query($sql2);

while($row=mysql_fetch_array($result2))
{
$emailproc=$row['proctor_mail'];
$emailparent=$row['parent_mail'];
@$status=$row['status'];
// if suceesfully inserted data into database, send confirmation link to email 

// ---------------- SEND MAIL FORM ----------------
if($status==0)
{
$sql5 = mysql_query("update main_db set last='$time' where reg='$reg'");

/*if($sql5)
{
	echo "MAA CHUDA";
}*/
mysql_query("update main_db set status=1 where reg='$reg'");
// send e-mail to ...
$to=$emailproc;

// Your subject
$subject="Student Information Mail from VIT Security";

// From
$header="from: your email <your email>";

// Your message
$message="This is to inform you that your Proctor Student  ";
$message.=$name."     Registration Number: ".$reg."  "."  has left the campus at" ."\n"."DATE AND TIME :   "."$time";


// send email
$sentmail = mail($to,$subject,$message,$header);


// script

echo "<div style='background-color:red; color=black; font-size:.8em; ' id='status' > </div>";
// if your email succesfully sent
if($sentmail){

echo "<script>";
echo "alert('Mail is successfully sent to the proctor.')";
echo "</script>";
}

}
//return
else if($status==1)
{
mysql_query("update main_db set status=0 where reg='$reg'");
// send e-mail to ...
$to=$emailproc;
mysql_query("update main_db set last='' where reg='$reg'");

// Your subject
$subject="Student Information Mail from VIT Security";

// From
$header="from: your email <your email>";

// Your message
$message="This is to inform you that your Proctor Student ";
$message.=$name."     Registration Number: ".$reg."  "."  has entered the campus at" ."\n"."DATE AND TIME :   "."$time";


// send email
$sentmail = mail($to,$subject,$message,$header);


// if not found 

echo "<div style='background-color:green' id='status'></div>";
	// if your email succesfully sent
if($sentmail){

echo "<script>";
echo "alert('Mail is successfully sent to the proctor.')";
echo "</script>";
}

}
else {
echo "Cannot send any mail";
}
}
}
?>
	

	</div>
	</body>

	
	</html>