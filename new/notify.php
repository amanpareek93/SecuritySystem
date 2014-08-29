<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("security",$conn);


$a = array();
$a = $_POST['notify'];
$i = 1;
foreach($a as $del)
{

$query=mysql_query("UPDATE `leave` set status = '$i' WHERE reg='$del'");

}

echo "<script>
alert('The leave requests have been approved');
</script>"
?>

