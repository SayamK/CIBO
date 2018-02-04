<?php
require_once('dbconnect.php');

$query = "SELECT * FROM dishes";
$result = mysql_query($query);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
	$arr = array();
	$i=0;
while ($row = mysql_fetch_assoc($result)) {

   $arr[$i]=$row;$i++;
}
// echo json_encode($arr);

// $arr = array("element1","element2",array("element31","element32"));
//$arr['name'] = "response";
echo $_GET['callback']."(".json_encode($arr).");";




 ?>
