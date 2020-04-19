<?php
include_once("connection.php");
$btn=$_POST["btn"];
if($btn=="SAVE")
	dosave($dbcon);
else if($btn=="Update")
	doupdate($dbcon);
else
	dodelete($dbcon);
function dosave($dbcon)
{
$RegNo=$_POST["RegNo"];
$name=$_POST["name"];
$add=$_POST["add"];
$city=$_POST["city"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$president=$_POST["president"];
$POM=$_POST["POM"];
$year=$_POST["year"];
$NOM=$_POST["NOM"];
$OI=$_POST["OI"];
$query="insert into NGOinfo values('$RegNo','$name','$add','$city','$contact','$email','$president','$POM','$year','$NOM','$OI')";
mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")	
		echo "Record Submitted";
	else
		echo mysqli_error($dbcon);
    }
function doupdate($dbcon)
{
$RegNo=$_POST["RegNo"];
$name=$_POST["name"];
$add=$_POST["add"];
$city=$_POST["city"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$president=$_POST["president"];
$POM=$_POST["POM"];
$year=$_POST["year"];
$NOM=$_POST["NOM"];
$OI=$_POST["OI"];
$query="update NGOinfo set Name='$name',Address='$add',City='$city',Contact='$contact',Email='$email',President='$president',PresidentMobile='$POM',Year='$year',NoOfMembers='$NOM',OtherInformation='$OI' where RegistrationNo=$RegNo";
		
	 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Updated....";
        else
        echo "Invalid Registration No";
    }
    else
        echo mysqli_error($dbcon);

}
function dodelete($dbcon)
{
	$RegNo=$_POST["RegNo"];

$query="delete from NGOinfo where RegistrationNo='$RegNo'";
		
	 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Deleted....";
        else
        echo "Invalid Registration Number";
    }
    else
        echo mysqli_error($dbcon);

}



?>