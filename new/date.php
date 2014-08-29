
<html>
<head>
<style>
 table { 
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 640px; 
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

</html>
<?php

$q = $_POST['date'];

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error($con));
  }

mysql_select_db("security2",$con);

$sql="SELECT DISTINCT backupt.name,backupt.reg,backupt.from,backupt.to,backupt.hours,backupt.place,backupt.purpose,backupt.date,backupt.out,backupt.in FROM backupt join userdetails on backupt.date = '$q'" ;
$result = mysql_query($sql,$con);


echo "<table border='1' cellpadding='11' id='table' style=' height: 10%; width: 100%' ;float:center;'>
<tr>
<th>Name</th>
<th>REG_NO</th>
<th>FROM</th>
<th>TO</th>
<th>HOURS</th>
<th>PLACE</th>
<th>PURPOSE</th>
<th>DATE</th>
<th>OUT</th>
<th>IN</th>
</tr>";
	if($result === FALSE) {
	    die(mysql_error()); // TODO: better error handling
	}
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
/*if(isset($row['name'])*/ echo "<td>" . $row['name'] . "</td>";
/*if(isset($row['reg'])*/  echo "<td>" . $row['reg'] . "</td>";
/*if(isset($row['from']) */ echo "<td>" . $row['from'] . "</td>";
/*if(isset($row['to'])*/  echo "<td>" . $row['to'] . "</td>";
/*if(isset($row['hours'])*/  echo "<td>" . $row['hours'] . "</td>";
/*if(isset($row['place'])*/  echo "<td>" . $row['place'] . "</td>";
/*if(isset($row['purpose'])*/  echo "<td>" . $row['purpose'] . "</td>";
/*if(isset($row['date'])*/  echo "<td>" . $row['date'] . "</td>";
/*if(isset($row['out'])*/   echo "<td>" . $row['out'] . "</td>";
/*if(isset($row['in'])*/    echo "<td>" . $row['in'] . "</td>";
  /*if ($row['av']=='1')

  echo "<td>" . "Available" . "</td>";
else
  echo "<td>" . "Not Available" . "</td>";
  }
  */
  }
echo "</table>";


?>
