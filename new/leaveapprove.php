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
margin-left: 320px;
width: 900px;

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
margin-top:10px;
margin-left: 350px;
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
width: 900px;
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








 table { 
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 900px; 
border-collapse: 
collapse; border-spacing: 0; 
}

td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #DFDFDF;  /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */

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
				 <li><a href="#">History</a></li>
				 <ul class="dropdown">
				       <li><a href="type.html">Type</a></li>
				       <li><a href="date.html">Date</a></li>
				       <li><a href="name.html">Name</a></li>
				       <li><a href="block.html">Block</a></li>
				       
				    </ul>
			      </div>
			      <div>
				 <li><a href="Features.php">Contact Us</a></li>
				 <ul class="dropdown">
				       <li><a href="Exceptional.php">CTS</a></li>
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

<form action = "leaveapprove.php" method = "post">

<table id="table" border="1" cellpadding="10">
<tr>
	<td> NAME</td>
	<td> REGISTRATION NUMBER</td>
	<td> FROM</td>
	<td> TO</td>
	<td> DATE</td>

	<td> PLACE</td>
	<td> PURPOSE</td>
	<td> LEAVE ID</td>
		<td> APPROVE</td>

<?php
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("security2");

$query=mysql_query("SELECT * FROM `leave`");

while ($row = mysql_fetch_array($query))
{
echo"<tr>";
$var = $row['reg'];
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['reg'] . "</td>";
echo "<td>" . $row['from'] . "</td>";
echo "<td>" . $row['to'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['place'] . "</td>";
echo "<td>" . $row['purpose'] . "</td>";
echo "<td>" . $row['leaveid'] . "</td>";


if($row['status']=='0')
{
echo "<td>" . "<input type ='checkbox' name='notify[]' value='$var'>" . "</td>";
}
else
{
echo "<td>" . "ALREADY APPROVED" . "</td>";
}

echo "</tr>";
}
}

?>

</table>
<input type="submit" value="APPROVE" id="mainbut1">

</form>


    	</div>
</body>
<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("security2",$conn);


@$a = array();
@$a = $_POST['notify'];
@$i = 1;
if(isset($a))
{
foreach($a as $del)
{

$query=mysql_query("UPDATE `leave` set status = '$i' WHERE reg='$del'");

}
if($query)
{
echo "<script>
alert('Leave Approved');
window.location.href='leaveapprove.php';
</script>";
}
}
?>
</html>