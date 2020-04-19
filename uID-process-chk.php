<?php
include_once("connection.php");
$uID=$_GET["uID"];
$query="select * from Signup where UserName='$uID'";



$table=mysqli_query($dbcon,$query);
if(mysqli_num_rows($table)==0)
    echo "Available Username";
else
    echo "Allready exist";


?>
