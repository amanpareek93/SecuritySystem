<html>
<head>
	<link rel="stylesheet" href="css/leftbar.css">

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
margin-top: -600px;
margin-left: 400px;
width: 800px;

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
padding-bottom: 40px;
}
.input
{
font-family: tahoma arial; 
font-size:19px;
font-weight: bold;
font-style: normal;
margin-left: 50px;
}
#box1
{
margin-top: 30px;
}

.inp
{

margin-top: -50px;
	margin-left: 250px;
	border-radius: 5px;
	height: 6%;
	width: 350px;
font-size: 18px;
font-weight: bold;
}
.inp:focus
{
border:1px solid #00ffff;

}


</style>
</head>
<body>
      	<img src="white vit.png" id="logo"/>

    	<h1 align="center" id="hea"> STUDENT OUTING DETAILS</h1>

<div id="leftbar">
 <div class="large-2 columns hide-for-medium-down left-bar" style="overflow-y: hidden; outline: none;" tabindex="5000">
	       <div class="row">
		  <div class="large-12 columns">
		     <div class="top">
			<div class="row negative-margin">
			   <div class="large-12 columns center-element">
			      <a href="">
				
			      </a>
			   </div>
			</div>
			<div class="row negative-margin select-campus">
			   <div class="large-12 large-centered columns center-element">
			      <div class="row negative-margin">
				<div class="large-10 large-centered columns select-campus-column">
				   
				</div>
			      </div>
			   </div> 
			</div>
			<div class="row negative-margin left-bar-link-container">
			   <ul>
			      <div class="active">
				 <li><a href="index.html">Home</a></li>
			      </div>
			      <div>
				 <li class="has-dropdown "><div class="dropdown-header"><a href="hostelindex.html">Leave Menu</a><
				 <ul class="dropdown">
				       <li><a href="leaverequest.php">Requests</a></li>
				       <li><a href="leaveapprove.php">Approve</a></li>
				       
				    </ul>

				 </div>

				 </li>
			      </div>
			      <div>
				 <li><a href="Library_services.php">History</a></li>
				 <ul class="dropdown">
				       <li><a href="type.html">Type</a></li>
				       <li><a href="date.html">Date</a></li>
				       <li><a href="name.html">Name</a></li>
				       <li><a href="block.html">Block</a></li>
				       
				    </ul>
			      </div>
			      <div>
				 <li><a href="#">Contact Us</a></li>
				 <ul class="dropdown">
				       <li><a href="#">CTS</a></li>
				       <li><a href="#">Our team</a></li>
				   
				       
				    </ul>
			      </div>
			
			      </div>
			      <div>
				
			      </div>
			      <div>
				
			      </div>
			      <div>
			
			      </div>	
			   </ul>
			</div>
		     </div>
		    
		     </div>
		  </div>
	       </div>
	       </div>
		</div>
    	
<div id="wrapper"> 		

      	<img src="head.jpg" id= "vit"/>

		<form id="form" name="form1" onsubmit="return validate();" action="leaverequest.php" method="post">
	
	<p class = "input"><br> Name </p> <input type ="text" name="name" class="inp" placeholder="Name"  id="input1">
	<p class = "input"> <br>Registration Number </p> <input type ="text" class="inp" name="reg" placeholder="Registration Number">
	<p class = "input"><br> From </p> <input type ="time" name="from" class="inp" placeholder="From Time">
	<p class = "input" ><br> To </p> <input type ="time" class="inp" name="to" placeholder="To Time">
	<p class = "input"> <br> Place </p> <input type ="text" class="inp" name="place" placeholder="Place" >
	<p class = "input"> <br> Purpose </p> <input type ="text" name="purpose" class="inp" placeholder="Purpose" style="margin-top:-40px; position: absolute;">
		
	<br>
	<br>
	<br>
	<input type="submit" class="button" id="mainbut1">
</form>
<?php

@$a = $_POST['name'];
@$b = $_POST['reg'];
@$c = $_POST['from'];
@$d = $_POST['to'];
@$f = $_POST['place'];
@$g = $_POST['purpose'];
$e = $d - $c;
date_default_timezone_set("Asia/Kolkata");
$time = date('h:i:s');
$date = date('Y-m-d');


$h  = rand(100000,999999);

if(isset($a) && isset($b) && isset($c) && isset($d) && isset($e) && isset($f)&& isset($g))
{

mysql_connect("localhost", "root", "");
mysql_select_db("security2");


$i = 0;

$res = mysql_query("INSERT INTO `leave`(`name`, `reg`, `from`, `to`, `hours`, `place`, `purpose`, `leaveid`, `status`, `date`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i', '$date')");
if($res)
echo "<script>
alert('LEAVE REQUEST SENT');
</script> ";

else
echo "<script>
alert('LEAVE REQUEST ERROR. TRY AGAIN');
</script> ";
}

?>






    	</div>
</body>

</html>