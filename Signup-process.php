<?php
include_once("connection.php");



$uid=$_GET["uID"];
$pwd=$_GET["pwd"];
$mob=$_GET["mob"];
$query="insert into signup values('$uid','$pwd','$mob')";
mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)=="")	
  /*  echo header("location:front.php?msg=Record Submitted");*/
   echo "record submitted";
	else
		echo mysqli_error($dbcon);

    




?>