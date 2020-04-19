<?php
include_once("connection.php");
$nID=$_GET["nID"];
$query="select *from info where NeedyID='$nID'";
$table=mysqli_query($dbcon,$query);

$ary=array();
if(mysqli_num_rows($table)!=0)
{
	$ary[]=mysqli_fetch_array($table);
	echo json_encode($ary);
}
else{
		echo json_encode($ary);
}
?>