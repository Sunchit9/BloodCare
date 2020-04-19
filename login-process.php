<?php
include_once("connection.php");

session_start();
  $logemail=$_GET["logemail"];
  $logpwd=$_GET["logpwd"];

$query="select * from signup where UserName='$logemail' and Password='$logpwd'";

   $table=mysqli_query($dbcon,$query);
        $Error=mysqli_error($dbcon);
    if($Error=="")
	{
		 $table=mysqli_query($dbcon,$query);
		if(mysqli_num_rows($table)!=0)
		{
			$_SESSION["uid"]=$logemail;
       echo "Authorised";
		}
    else
        echo "Unauthorised";

	}
else 
	echo "$Error";
?>