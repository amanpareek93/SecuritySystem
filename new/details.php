<?php


$conn = mysql_connect("localhost","root","");
mysql_select_db("security",$conn);

?>


<html>
    <head>
        <title>VIT SECURITY</title>
 <style>
body{
	background-color: #fff;
	font-family: sans-serif;
}

#hea{
	background-color: #424447;
	padding: 30px;

	margin-left: -8px;
	margin-right: -8px;
	margin-top: -28px;
	color:white;
}


#wrapper
{
	background-color: #424447;
margin: 0 auto;
width: 600px;
margin-top: 70px;
padding: 20px;
color:white;
border-radius: 15px;
}

table
{
border-collapse:collapse;
}
table,th, td
{
	color: white;
border: 2px solid white;
}

.entries
{

	margin-left: 50px;
	font-size: 1.2em;
}

.inp
{

	margin-left: 50px;
	border-radius: 5px;
	height: 05%;
	width: 35%;
}
.inp:focus
{

background-color: grey;


}
.button
{

	margin-left: 180px;
	border-radius: 10px;
	width: 100px;
	height: 30px;
}

#logout
{

	margin-left: 600px;
}

#table
{
	height: 10%;
	width: 100%;
}

#backbutton
{

		border-radius: 4px;
	width: 100px;
	height: 30px;
	margin-left: 600px;
}

.inp2
{
font-size: .9em;

}

.inp3
{

	font-weight: bold;
	text-align: center;
}
</style>	
	

	</head>
	
    <body>
    	<br>
    	<h1 align="center" id="hea"> STUDENT OUTING DETAILS</h1>


<div id="wrapper"> 		
	
<h1 align="center"> Welcome Admin</h1>
<h3> The Following Students are currently outside the campus </h3>

<table id="table" border="1">
<tr>
	<td class="inp3"> NAME</td>
	<td class="inp3"> REG NUMBER</td>
	<td class="inp3"> LAST WENT OUT </td>


</tr>
<?php

$query=mysql_query("SELECT * FROM main_db WHERE status=1");


while ($row2 = mysql_fetch_array($query))
{
echo"<tr>";
echo   "<td class = 'inp2' id='new'>" . "<a href='#' style='color: white'>" . $row2['name'] . "</a>". "</td>" ;
echo "<td class = 'inp2'>" . $row2['reg'] . "</td>";
echo "<td class = 'inp2'>" . $row2['last'] . "</td>";

echo "<tr>";
}


?>
</table>


		</div>
	<br>
	<br>
<a href="signup_ac2.php"> <button id="backbutton">GO BACK </button>
	</form>
	


	</body>
	</html>
