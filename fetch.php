<?php

mysql_connect('localhost','root','');
mysql_select_db("security2");



// table name 
date_default_timezone_set("Asia/Kolkata");
$time = date('h:i:s');
$date = date('Y-m-d');
echo $date;
if(isset($_POST['name'])&&isset($_POST['reg']))
{

$name=$_POST['name'];
$reg=$_POST['reg'];


// Insert data into database 

$reg2 = strtoupper($reg);

$sql2="select * from userdetails where reg='$reg' and name='$name'";
$result2=mysql_query($sql2);

while($row=mysql_fetch_array($result2))
{
$emailproc=$row['procid'];
$emailparent=$row['parentid'];
$block = $row['block'];
$room = $row['room'];
$year = $row['year'];
$phone = $row['phone'];
}



$resultnew= mysql_query("SELECT * FROM `leave` WHERE name = '$name'");
//if($resultnew)

while($row3=mysql_fetch_array($resultnew))
{
@$status=$row3['status'];


// ---------------- SEND MAIL FORM ----------------
if($status==1)
{

$sql5 = mysql_query("UPDATE `leave` SET `out`='$time', `date` ='$date' WHERE reg= '$reg'");

$new = mysql_query("UPDATE `leave` SET `status`=2 WHERE reg= '$reg'");

if($new)
	//echo "C HANGED";
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
else if($status==2)
{
mysql_query("UPDATE `leave` SET `status`=3 WHERE reg='$reg'");
// send e-mail to ...
$to=$emailproc;
mysql_query("UPDATE `leave` SET `in`='$time' WHERE reg= '$reg'");

$new = mysql_query("SELECT * FROM `leave` WHERE reg='$reg'");

while($rownew = mysql_fetch_array($new))
{
	$outing = $rownew['out'];
}

$diff = $time-$outing;
$lo = mysql_query("UPDATE `leave` SET total='$diff' WHERE reg='$reg'");
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

else
{
	echo "<script>";
	echo " LEAVE NOT APPROVED";
	echo "Cannot send any mail";
	echo "</script>";
}
}
}
$resultnew2= mysql_query("SELECT * FROM `leave` WHERE name = '$name'");
while($row3=mysql_fetch_array($resultnew2))
{
$from = $row3['from'];
$to = $row3['to'];
$hours = $row3['hours'];
$place = $row3['place'];
$purpose = $row3['purpose'];
$leaveid = $row3['leaveid'];
}

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
width: 750px;
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
.det
{

	margin-left: 20px;
	color:white;
}
#imagefetch
{

border-color: black;
width: 150px;
height: 150px;
border-style: solid;
margin-left: 30px;
float: left;
margin-top: 40px;
position: absolute;
}
#img
{

	position: absolute;
	margin-top: 05px;
}
#backb
{

	
}
</style>	
	

	</head>
	
    <body>
    	<br>
    	<img src="white vit.png"/>
    	<h1 align="center">Outgoing Entries</h1>


<div id="wrapper"> 		
<div id ='imagefetch'>
<img  id = "img" src="images/01.png">

	</div>
<br> <br>
<a href="gates.php"><button id="backb">GO BACK</button></a>
<table align="center" color="white">

<tr><td><p class = "det"> NAME : &nbsp&nbsp     <?php echo '<b>'.$name.'</b>'; ?></p></td></tr>
<tr><td><p class = "det"> REG NUMBER :&nbsp&nbsp      <?php echo '<b>'.$reg.'</b>'; ?></p></td></tr>
<tr><td><p class = "det"> BLOCK :&nbsp&nbsp      <?php echo $block; ?></p></td></tr>
<tr><td><p class = "det"> ROOM NO :&nbsp&nbsp       <?php echo $room; ?></p></td></tr>
<tr><td><p class = "det"> YEAR :&nbsp&nbsp       <?php echo $year; ?></p></td></tr>
<tr><td><p class = "det"> LEAVE ID :&nbsp&nbsp       <?php echo $leaveid; ?></p></td></tr>
</table>
<br><br><br><br><br><br><br>
<tr><td><p class = "det"> CELL NO :&nbsp&nbsp       <?php echo $phone; ?></p></td></tr>
<tr><td><p class = "det"> FROM :&nbsp&nbsp       <?php echo $from; ?></p></td></tr>
<tr><td><p class = "det"> TO :&nbsp&nbsp       <?php echo $to; ?></p></td></tr>
<tr><td><p class = "det"> HOURS :&nbsp&nbsp       <?php echo $hours; ?></p></td></tr>
<tr><td><p class = "det"> PLACE :&nbsp&nbsp       <?php echo $place; ?></p></td></tr>
<tr><td><p class = "det"> PURPOSE :&nbsp&nbsp       <?php echo $purpose; ?></p></td></tr>
<tr><td><p class = "det"> STATUS :&nbsp&nbsp       <?php if($status>0)echo "APPROVED"; ?></p></td></tr>

<table>
	<br>
	<br>
	<br>

</div>
<form action="details.php" >
	<p style = "margin-left:15px; padding-top: 10px;"> DETAILS OF STUDENTS OUT OF THE CAMPUS </p>
<input type="submit" id="not" value="Details">
</form>

	

	</div>
	</body>

	
	</html>