<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "manthan"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

$sel = mysqli_query($con,"select * from division");
$names = array();

while ($row = mysqli_fetch_array($sel)) {
 $names[] = array("name"=>$row['name'],"star"=>$row['star'],"hair_stylist"=>$row['hair_stylist'],"address1"=>$row['address1'],"address2"=>$row['address2'],"service1"=>$row['service1'],"service2"=>$row['service2'],"service3"=>$row['service3']);
}
echo json_encode($names);
?>