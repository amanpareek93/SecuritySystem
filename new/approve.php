<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("security2",$conn);


$a = array();
$a = $_POST['notify'];
$i = 1;

foreach($a as $del)
{

$query=mysql_query("UPDATE `leave` set status = '$i' WHERE reg='$del'");

}

echo "<script>
alert('hola');
var new = confirm('The leave requests have been approved');
if(new==true)
{
	window.location.href= 'leaveapprove.php'
}
</script>";

//header( location: 'leaveapprove.php');
?>

