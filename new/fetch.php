<?php

mysql_connect('localhost','root','');
mysql_select_db("security2");


//timezone setting
date_default_timezone_set("Asia/Kolkata");
$time = date('h:i:s');
$date = date('Y-m-d');
//getting variables from the scan form
if(isset($_POST['name'])&&isset($_POST['reg']))
{
$name=$_POST['name'];
$reg=$_POST['reg'];


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

while($row3=mysql_fetch_array($resultnew))
{
@$status=$row3['status'];


if (!isset($status))
	$status= -1;


else if($status==1)
{

$sql5 = mysql_query("UPDATE `leave` SET `out`='$time', `date` ='$date' WHERE reg= '$reg'");

$new = mysql_query("UPDATE `leave` SET `status`=2 WHERE reg= '$reg'");

if($new)
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


if($sentmail){

echo "<script>";
echo "alert('Mail is successfully sent to the proctor.')";
echo "</script>";
}

}
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
@$from = $row3['from'];
@$to = $row3['to'];
@$hours = $row3['hours'];
@$place = $row3['place'];
@$purpose = $row3['purpose'];
@$leaveid = $row3['leaveid'];
}

if((!isset($from)) && (!isset($to)) && (!isset($hours)) &&(!isset($place)) &&(!isset($purpose)) && (!isset($leaveid))  && (!isset($status)))
{	$from = " ";
$to = " ";
$hours = " ";
$place = " ";
$purpose = " ";
$leaveid = " ";
$status = -1;
}
?>
<html>
<head>
<title> VIT SECURITY </title>
<style>
body{
	background-color: ;
	font-family: sans-serif;

}

#logo{
	position: absolute;
	width:150px;
	margin-top: 15px;
	margin-left: 10px;
}

#hea{
	background-color: #161329;
	padding: 30px;

	margin-left: -8px;
	margin-right: -8px;
	margin-top: -20px;
	color:white;
font-family: 'Lucida Casual', 'Comic Sans MS';
font-size: 25px;
}

#wrapper
{
border-color: black;
border-style: solid;
border-radius: 10px;
margin: 0 auto;
width: 1100px;
margin-top: 10px;
}

#mainbut1

{
color: white;
font-weight: bold;
font-size: 1.1em;
width: 200px;
height: 45px;
border-radius: 20px;
margin-bottom: 80px;
margin-top: -10px;
margin-left: 280px;
background-color: #161329;
cursor: pointer;
transition: 0.3s ease-in;

-moz-transition: 0.3s ease-in;
-webkit-transition: 0.3s ease-in;

}
#mainbut1:hover
{
background-color:#3C3447;

}

#vit
{

	margin-bottom: -40px;

}


#tempwrap
{

	float: right;
	margin-top: -500px;
	margin-right: -400px;
}


.basicinfo
{
font-family: tahoma arial; 
font-size:22px;
font-weight: bold;
font-style: normal;
padding-bottom: 20px;
}

.secondinfo
{
font-family: tahoma arial; 
font-size:22px;
font-weight: bold;
font-style: normal;
padding-bottom: 20px;
}

#tab1
{

	margin-top: 10px;
	padding-bottom: 10px;
	margin-left: 550px;
}

#tab2
{

	margin-top: -80px;
	padding-bottom: 10px;
margin-left: 20px;

}

#imagefetch
{

border-style: solid;
width: 250px;
height: 250px;
margin-top: 50px;
margin-left: 100px;
position: absolute;
}
#status
{
margin-top: 05px;
	margin-left: 300px;
	font-size: 35px;
}

#colorbar
{

	border-color: black;
	border-style: solid;
	width: 100px;
	height: 100px;
	position: absolute;
	margin-top: -180px;
	margin-left: 800px;
}

#sttext
{

font-family: tahoma arial; 
font-size:28px;
font-weight: bold;
margin-left: 930px;
margin-top: -130px;	
}
#backb
{
color: white;
font-weight: bold;
font-size: 1.1em;
width: 180px;
height: 45px;
position: absolute;
border-radius: 20px;
background-color: #161329;
cursor: pointer;
transition: 0.3s ease-in;

-moz-transition: 0.3s ease-in;
-webkit-transition: 0.3s ease-in;

}
</style>
</head>
<body>
      	<img src="white vit.png" id="logo"/>

    	<h1 align="center" id="hea"> STUDENT OUTING DETAILS</h1>
<a href="gates.php"><button id="backb">GO BACK</button></a>

    	<div id = "wrapper">
	<div id ='imagefetch'>
<img id = "img" src="images/02.jpg" alt="image">

	</div>

<br> <br>
<table align="center" color="white" id = "tab1">

<tr><td><p class = "basicinfo"> NAME       :&nbsp&nbsp     <?php echo '<b>'.$name.'</b>'; ?></p></td></tr>
<tr><td><p class = "basicinfo"> REG NUMBER :&nbsp&nbsp      <?php echo '<b>'.$reg.'</b>'; ?></p></td></tr>
<tr><td><p class = "basicinfo"> BLOCK      :&nbsp&nbsp      <?php echo $block; ?></p></td></tr>
<tr><td><p class = "basicinfo"> ROOM NO    :&nbsp&nbsp       <?php echo $room; ?></p></td></tr>
<tr><td><p class = "basicinfo"> YEAR       :&nbsp&nbsp       <?php echo $year; ?></p></td></tr>
<tr><td><p class = "basicinfo"> CELL NO   :&nbsp&nbsp       <?php echo $phone; ?></p></td>

</table>
<br><br><br><br><br><br><br>
<table align = "center" color="white" id="tab2">

<tr><td><p class = "secondinfo"> LEAVE ID :&nbsp&nbsp       <?php echo $leaveid; ?></p></td>

<td><p class = "secondinfo"> &nbsp&nbsp &nbsp&nbsp FROM :&nbsp&nbsp       <?php echo $from; ?></p></td>
	
<td><p class = "secondinfo"> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp  TO :&nbsp&nbsp       <?php echo $to; ?></p></td>
<td><p class = "secondinfo"> &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp HOURS :       <?php echo $hours; ?></p></td></tr>


<tr><td><p class = "secondinfo"> PLACE :&nbsp&nbsp       <?php echo $place; ?></p></td>
<td><p class = "secondinfo"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbspPURPOSE :&nbsp&nbsp       <?php echo $purpose; ?></p></td></tr>

</table>



<p id="status" class="secondinfo"> STATUS :&nbsp&nbsp       <?php if($status==3){ echo "GOING OUT AGAIN. NOT ALLOWED";} elseif($status>0) { echo "APPROVED"; } else if ($status<0){ echo "REQUEST NOT APPLIED"; } else if($status==0){ echo " REQUEST NOT APPROVED"; } ?> </p>
	<br>
	<br>
	<br>

<?php
if($status==1)
{
echo "<div style='background-color:red; color=black; font-size:.8em; ' id='colorbar' > </div>";
echo "<p id='sttext'> EXITED </p>";
}
else if ($status==2)
{
echo "<div style='background-color:green; color=black; font-size:.8em; ' id='colorbar' > </div>";
echo "<p id='sttext'> ENTERED </p>";
}
?>
</div>

    	</div>
</body>

</html>