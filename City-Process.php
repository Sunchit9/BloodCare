<?php

include_once("connection.php");

$Blood=$_GET["Blood"];

$query="select distinct City from profile where BloodGroup='$Blood'";   
	//echo $query;
    $table=mysqli_query($dbcon,$query);
 
$ary=array();

while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}

echo json_encode($ary);

?>