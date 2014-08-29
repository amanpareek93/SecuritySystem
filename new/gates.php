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
margin-top: -650px;
margin-left: 400px;
width: 800px;

}

.input
{
font-family: tahoma arial; 
font-size:19px;
font-weight: bold;
font-style: normal;
margin-left: 50px;
margin-top: 20px;
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

#mainbut2

{
color: white;
font-weight: bold;
font-size: 1.1em;
width: 200px;
height: 45px;
border-radius: 20px;
margin-bottom: 50px;
margin-left: 280px;
background-color: #161329;
cursor: pointer;
transition: 0.3s ease-in;

-moz-transition: 0.3s ease-in;
-webkit-transition: 0.3s ease-in;

}
#mainbut2:hover
{
background-color:#3C3447;
width: 205px;
height: 48px;

}

#vit
{

	margin-bottom: -40px;
padding-bottom: 40px;
}


.inp
{

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
#input1
{


	margin-top: -45px;
}
#input2
{
position: absolute;
margin-top: -45px;
width: 350px;}
#inp2
{

	margin-top: 80px;
}

#tempwrap
{

	float: right;
	margin-top: -500px;
	margin-right: -0px;
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
				 <li class="has-dropdown "><div class="dropdown-header"><a href="gates.php">Entry</a></div>
				 <li class="has-dropdown "><div class="dropdown-header"><a href="backup.html">BackUp</a></div>

				    <ul class="dropdown">
				       <li><a href="Exceptional.php">Exceptional Library</a></li>
				       <li><a href="#">Our Team</a></li>
				       <li><a href="floor-plan.php">Floor Plan</a></li>
				       <li><a href="Work_hours.php">Working Hours</a></li>
				       <li><a href="Rules.php">Rules</a></li>
				    </ul>
				 </li>
			      </div>
			      <div>
				 <li><a href="#">History</a></li>
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

	<form id="form" name="form1" onsubmit="return validate();" action="fetch.php" method="post">
	
	<p class = "input"><br> Name </p> <input type ="text" name="name" class="inp" placeholder="Name"  id="input1" maxlength="20">
	<p class = "input" id="inp2"> Registration Number </p> <input type ="text" class="inp" name="reg" placeholder="Registration Number"  id="input2">
	
	
	<br>
	
	<br>
	<input type="submit" id="mainbut1" >
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





    	</div>
<div id="tempwrap">
<form action="details.php" >
	<p style = "margin-left:15px; padding-top: 10px;"> STUDENTS OUT </p>
<input type="submit" id="not" value="Details">
</form>

<button id="button" onclick = "auto()"> SCAN 1</button>
<button id="button" onclick = "auto2()"> SCAN 2</button>
<button id="button" onclick = "auto3()"> SCAN 3</button>
</div>
</body>

</html>